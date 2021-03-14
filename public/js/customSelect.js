(function(angular,undefined){'use strict';if(!String.prototype.trim){String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,'');};}
function format(value,replace){if(!value){return value;}
var target=value.toString();if(replace===undefined){return target;}
if(!angular.isArray(replace)&&!angular.isObject(replace)){return target.split('$0').join(replace);}
var token=angular.isArray(replace)&&'$'||':';angular.forEach(replace,function(value,key){target=target.split(token+key).join(value);});return target;}
var module=angular.module('AxelSoft',[]);module.value('customSelectDefaults',{displayText:'Select...',emptyListText:'There are no items to display',emptySearchResultText:'No results match "$0"',addText:'Add',searchDelay:300});module.directive('customSelect',['$parse','$compile','$timeout','$q','customSelectDefaults',function($parse,$compile,$timeout,$q,baseOptions){var CS_OPTIONS_REGEXP=/^\s*(.*?)(?:\s+as\s+(.*?))?\s+for\s+(?:([\$\w][\$\w\d]*))\s+in\s+([\s\S]+?)(?:\s+track\s+by\s+([\s\S]+?))?$/;return{restrict:'A',require:'ngModel',link:function(scope,elem,attrs,controller){var customSelect=attrs.customSelect;if(!customSelect){throw new Error('Expected custom-select attribute value.');}
var match=customSelect.match(CS_OPTIONS_REGEXP);if(!match){throw new Error("Expected expression in form of "+
"'_select_ (as _label_)? for _value_ in _collection_[ track by _id_]'"+
" but got '"+customSelect+"'.");}
elem.addClass('dropdown custom-select');var displayFn=$parse(match[2]||match[1]),valueName=match[3],valueFn=$parse(match[2]?match[1]:valueName),values=match[4],valuesFn=$parse(values),track=match[5],trackByExpr=track?" track by "+track:"",dependsOn=attrs.csDependsOn;var options=getOptions(),timeoutHandle,lastSearch='',focusedIndex=-1,matchMap={};var itemTemplate=elem.html().trim()||'{{'+(match[2]||match[1])+'}}',dropdownTemplate='<a class="dropdown-toggle" data-toggle="dropdown" href ng-class="{ disabled: disabled }">'+
'<span>{{displayText}}</span>'+
'<b></b>'+
'</a>'+
'<div class="dropdown-menu">'+
'<div stop-propagation="click" class="custom-select-search">'+
'<input class="'+attrs.selectClass+'" type="text" autocomplete="off" ng-model="searchTerm" />'+
'</div>'+
'<ul role="menu">'+
'<li role="presentation" ng-repeat="'+valueName+' in matches'+trackByExpr+'">'+
'<a role="menuitem" tabindex="-1" href ng-click="select('+valueName+')">'+
itemTemplate+
'</a>'+
'</li>'+
'<li ng-hide="matches.length" class="empty-result" stop-propagation="click">'+
'<em class="muted">'+
'<span ng-hide="searchTerm">{{emptyListText}}</span>'+
'<span class="word-break" ng-show="searchTerm">{{ format(emptySearchResultText, searchTerm) }}</span>'+
'</em>'+
'</li>'+
'</ul>'+
'<div class="custom-select-action">'+
(typeof options.onAdd==="function"?'<button type="button" class="btn btn-primary btn-block add-button" ng-click="add()">{{addText}}</button>':'')+
'</div>'+
'</div>';elem.empty();var dropdownElement=angular.element(dropdownTemplate),anchorElement=dropdownElement.eq(0).dropdown(),inputElement=dropdownElement.eq(1).find(':text'),ulElement=dropdownElement.eq(1).find('ul');var childScope=scope.$new(true);configChildScope();anchorElement.on('click',function(event){if(childScope.disabled){return;}
childScope.$apply(function(){lastSearch='';childScope.searchTerm='';});focusedIndex=-1;inputElement.focus();if(!options.async){getMatches('');}});if(dependsOn){scope.$watch(dependsOn,function(newVal,oldVal){if(newVal!==oldVal){childScope.matches=[];childScope.select(undefined);}});}
anchorElement.on('keypress',function(event){if(!(event.altKey||event.ctrlKey)){anchorElement.click();}});inputElement.on('keydown',function(event){if(!/(13|27|40|^9$)/.test(event.keyCode))return;event.preventDefault();event.stopPropagation();switch(event.keyCode){case 27:anchorElement.dropdown('toggle');break;case 13:selectFromInput();break;case 40:focusFirst();break;case 9:anchorElement.dropdown('toggle');break;}});ulElement.on('keydown',function(event){if(!/(38|40)/.test(event.keyCode))return;event.preventDefault();event.stopPropagation();var items=ulElement.find('li > a');if(!items.length)return;if(event.keyCode==38)focusedIndex--;if(event.keyCode==40&&focusedIndex<items.length-1)focusedIndex++;if(focusedIndex>=0){items.eq(focusedIndex).focus();}else{focusedIndex=-1;inputElement.focus();}});resetMatches();$compile(dropdownElement)(childScope);elem.append(dropdownElement);controller.$render=function(){setDisplayText();};childScope.$watch(getDisplayText,setDisplayText);childScope.$watch(function(){return elem.attr('disabled');},function(value){childScope.disabled=value;});childScope.$watch('searchTerm',function(newValue){if(timeoutHandle){$timeout.cancel(timeoutHandle);}
var term=(newValue||'').trim();timeoutHandle=$timeout(function(){getMatches(term);},(term&&options.searchDelay)||0);});if('autofocus'in attrs){anchorElement.focus();}
var needsDisplayText;function setDisplayText(){var locals={};locals[valueName]=controller.$modelValue;var text=displayFn(scope,locals);if(text===undefined){var map=matchMap[hashKey(controller.$modelValue)];if(map){text=map.label;}}
needsDisplayText=!text;childScope.displayText=text||options.displayText;}
function getOptions(){return angular.extend({},baseOptions,scope.$eval(attrs.customSelectOptions));}
function getDisplayText(){options=getOptions();return options.displayText;}
function focusFirst(){var opts=ulElement.find('li > a');if(opts.length>0){focusedIndex=0;opts.eq(0).focus();}}
function selectFromInput(){var opts=ulElement.find('li > a');if(opts.length>0){var ngRepeatItem=opts.eq(0).scope();var item=ngRepeatItem[valueName];childScope.$apply(function(){childScope.select(item);});anchorElement.dropdown('toggle');}}
function getMatches(searchTerm){var locals={$searchTerm:searchTerm}
$q.when(valuesFn(scope,locals)).then(function(matches){if(!matches)return;if(searchTerm===inputElement.val().trim()){matchMap={};childScope.matches.length=0;for(var i=0;i<matches.length;i++){locals[valueName]=matches[i];var value=valueFn(scope,locals),label=displayFn(scope,locals);matchMap[hashKey(value)]={value:value,label:label};childScope.matches.push(matches[i]);}}
if(needsDisplayText)setDisplayText();},function(){resetMatches();});}
function resetMatches(){childScope.matches=[];focusedIndex=-1;};function configChildScope(){childScope.addText=options.addText;childScope.emptySearchResultText=options.emptySearchResultText;childScope.emptyListText=options.emptyListText;childScope.select=function(item){var locals={};locals[valueName]=item;var value=valueFn(childScope,locals);childScope.displayText=displayFn(childScope,locals)||options.displayText;controller.$setViewValue(value);anchorElement.focus();typeof options.onSelect==="function"&&options.onSelect(item);};childScope.add=function(){$q.when(options.onAdd(childScope.searchTerm),function(item){if(!item)return;var locals={};locals[valueName]=item;var value=valueFn(scope,locals),label=displayFn(scope,locals);matchMap[hashKey(value)]={value:value,label:label};childScope.matches.push(item);childScope.select(item);});};childScope.format=format;setDisplayText();}
var current=0;function hashKey(obj){if(obj===undefined)return 'undefined';var objType=typeof obj,key;if(objType=='object'&&obj!==null){if(typeof(key=obj.$$hashKey)=='function'){key=obj.$$hashKey();}else if(key===undefined){key=obj.$$hashKey='cs-'+(current++);}}else{key=obj;}
return objType+':'+key;}}};}]);module.directive('stopPropagation',function(){return{restrict:'A',link:function(scope,elem,attrs,ctrl){var events=attrs['stopPropagation'];elem.bind(events,function(event){event.stopPropagation();});}};});})(angular);