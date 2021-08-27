(()=>{var e,r={151:(e,r,t)=>{var n=t(305);function i(e){var r=document.getElementById("ctaTable").getElementsByTagName("tbody")[0].insertRow(0),t=r.insertCell(),n=document.createTextNode(e);t.appendChild(n);var i,s,a,o,l=function(e){var r=e.substring(8,11),t=Math.random().toString(36).replace(/[^a-z]+/g,"").substr(0,2);return"https://www.fake.ly/"+r+t}(e);r.insertCell().appendChild((i=l,(s=document.createElement("a")).href=i,s.innerHTML=i,s)),r.insertCell().appendChild((a=l,(o=document.createElement("button")).innerHTML="Copy",o.type="submit",o.classList="btn btn-primary btn-sm",o.dataset.url=a,o.addEventListener("click",(function(e){!function(e){navigator.clipboard.writeText(e).then((function(){}),(function(e){console.error("Async: Could not copy text: ",e)}))}(a)})),o))}var s={classTo:"form-group",errorClass:"has-danger",successClass:"has-success",errorTextParent:"form-group",errorTextTag:"div",errorTextClass:"text-help"};window.onload=function(){a();var e=document.getElementById("submitURL"),r=new n(e,s,!0);e.addEventListener("submit",(function(e){e.preventDefault();var t=r.validate(),n=document.getElementById("originalURL").value;t&&(document.getElementById("ctaResults").classList.remove("d-none"),i(n))}));var t=document.getElementById("menubutton"),o=document.getElementById("siteMenu");t.addEventListener("click",(function(e){"false"===o.getAttribute("aria-hidden")?(o.setAttribute("aria-hidden","true"),t.setAttribute("aria-expanded","false")):(o.setAttribute("aria-hidden","false"),t.setAttribute("aria-expanded","true"))}))};function a(){window.innerWidth<992?(menubutton.setAttribute("aria-expanded","false"),siteMenu.setAttribute("aria-hidden","true")):(menubutton.setAttribute("aria-expanded","true"),siteMenu.setAttribute("aria-hidden","false"))}window.onresize=a},753:()=>{},5:()=>{},683:()=>{},295:()=>{},305:function(e){e.exports=function(){"use strict";var e={required:"This field is required",email:"This field requires a valid e-mail address",number:"This field requires a number",integer:"This field requires an integer value",url:"This field requires a valid website URL",tel:"This field requires a valid telephone number",maxlength:"This fields length must be < ${1}",minlength:"This fields length must be > ${1}",min:"Minimum value for this field is ${1}",max:"Maximum value for this field is ${1}",pattern:"Please match the requested format"};function r(e,r){for(;(e=e.parentElement)&&!e.classList.contains(r););return e}function t(e){var r=arguments;return this.replace(/\${([^{}]*)}/g,(function(e,t){return r[t]}))}function n(e){return e.pristine.self.form.querySelectorAll('input[name="'+e.getAttribute("name")+'"]:checked').length}function i(e,r){for(var t in r)t in e||(e[t]=r[t]);return e}function s(e){return!!(e&&e.constructor&&e.call&&e.apply)}var a={classTo:"form-group",errorClass:"has-danger",successClass:"has-success",errorTextParent:"form-group",errorTextTag:"div",errorTextClass:"text-help"},o="pristine-error",l="input:not([type^=hidden]):not([type^=submit]), select, textarea",u=["required","min","max","minlength","maxlength","pattern"],c=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,f={},d=function(r,t){t.name=r,t.msg||(t.msg=e[r]),void 0===t.priority&&(t.priority=1),f[r]=t};function p(e,n,c){var d=this;function p(e,r,t){e.setAttribute("novalidate","true"),d.form=e,d.config=i(r||{},a),d.live=!(!1===t),d.fields=Array.from(e.querySelectorAll(l)).map(function(e){var r=[],t={},n={};return[].forEach.call(e.attributes,(function(e){if(/^data-pristine-/.test(e.name)){var i=e.name.substr(14);if(i.endsWith("-message"))return void(n[i.slice(0,i.length-8)]=e.value);"type"===i&&(i=e.value),m(r,t,i,e.value)}else~u.indexOf(e.name)?m(r,t,e.name,e.value):"type"===e.name&&m(r,t,e.value)})),r.sort((function(e,r){return r.priority-e.priority})),d.live&&e.addEventListener(~["radio","checkbox"].indexOf(e.getAttribute("type"))?"change":"input",function(e){d.validate(e.target)}.bind(d)),e.pristine={input:e,validators:r,params:t,messages:n,self:d}}.bind(d))}function m(e,r,t,n){var i=f[t];if(i&&(e.push(i),n)){var s=n.split(",");s.unshift(null),r[t]=s}}function v(e){for(var r=[],n=!0,i=0;e.validators[i];i++){var a=e.validators[i],o=e.params[a.name]?e.params[a.name]:[];if(o[0]=e.input.value,!a.fn.apply(e.input,o)){if(n=!1,s(a.msg))r.push(a.msg(e.input.value,o));else{var l=e.messages[a.name]||a.msg;r.push(t.apply(l,o))}if(!0===a.halt)break}}return e.errors=r,n}function h(e){if(e.errorElements)return e.errorElements;var t=r(e.input,d.config.classTo),n=null,i=null;return(n=d.config.classTo===d.config.errorTextParent?t:t.querySelector("."+d.config.errorTextParent))&&((i=n.querySelector("."+o))||((i=document.createElement(d.config.errorTextTag)).className=o+" "+d.config.errorTextClass,n.appendChild(i),i.pristineDisplay=i.style.display)),e.errorElements=[t,i]}function g(e){var r=h(e),t=r[0],n=r[1];t&&(t.classList.remove(d.config.successClass),t.classList.add(d.config.errorClass)),n&&(n.innerHTML=e.errors.join("<br/>"),n.style.display=n.pristineDisplay||"")}function y(e){var r=h(e),t=r[0],n=r[1];return t&&(t.classList.remove(d.config.errorClass),t.classList.remove(d.config.successClass)),n&&(n.innerHTML="",n.style.display="none"),r}function b(e){var r=y(e)[0];r&&r.classList.add(d.config.successClass)}return p(e,n,c),d.validate=function(e,r){r=e&&!0===r||!0===e;var t=d.fields;!0!==e&&!1!==e&&(e instanceof HTMLElement?t=[e.pristine]:(e instanceof NodeList||e instanceof(window.$||Array)||e instanceof Array)&&(t=Array.from(e).map((function(e){return e.pristine}))));for(var n=!0,i=0;t[i];i++){var s=t[i];v(s)?!r&&b(s):(n=!1,!r&&g(s))}return n},d.getErrors=function(e){if(!e){for(var r=[],t=0;t<d.fields.length;t++){var n=d.fields[t];n.errors.length&&r.push({input:n.input,errors:n.errors})}return r}return e.tagName&&"select"===e.tagName.toLowerCase()?e.pristine.errors:e.length?e[0].pristine.errors:e.pristine.errors},d.addValidator=function(e,r,t,n,i){e instanceof HTMLElement?(e.pristine.validators.push({fn:r,msg:t,priority:n,halt:i}),e.pristine.validators.sort((function(e,r){return r.priority-e.priority}))):console.warn("The parameter elem must be a dom element")},d.addError=function(e,r){(e=e.length?e[0]:e).pristine.errors.push(r),g(e.pristine)},d.reset=function(){for(var e=0;d.fields[e];e++)d.fields[e].errorElements=null;Array.from(d.form.querySelectorAll("."+o)).map((function(e){e.parentNode.removeChild(e)})),Array.from(d.form.querySelectorAll("."+d.config.classTo)).map((function(e){e.classList.remove(d.config.successClass),e.classList.remove(d.config.errorClass)}))},d.destroy=function(){d.reset(),d.fields.forEach((function(e){delete e.input.pristine})),d.fields=[]},d.setGlobalConfig=function(e){a=e},d}return d("text",{fn:function(e){return!0},priority:0}),d("required",{fn:function(e){return"radio"===this.type||"checkbox"===this.type?n(this):void 0!==e&&""!==e},priority:99,halt:!0}),d("email",{fn:function(e){return!e||c.test(e)}}),d("number",{fn:function(e){return!e||!isNaN(parseFloat(e))},priority:2}),d("integer",{fn:function(e){return!e||/^\d+$/.test(e)}}),d("minlength",{fn:function(e,r){return!e||e.length>=parseInt(r)}}),d("maxlength",{fn:function(e,r){return!e||e.length<=parseInt(r)}}),d("min",{fn:function(e,r){return!e||("checkbox"===this.type?n(this)>=parseInt(r):parseFloat(e)>=parseFloat(r))}}),d("max",{fn:function(e,r){return!e||("checkbox"===this.type?n(this)<=parseInt(r):parseFloat(e)<=parseFloat(r))}}),d("pattern",{fn:function(e,r){var t=r.match(new RegExp("^/(.*?)/([gimy]*)$"));return!e||new RegExp(t[1],t[2]).test(e)}}),p.addValidator=function(e,r,t,n,i){d(e,{fn:r,msg:t,priority:n,halt:i})},p}()}},t={};function n(e){var i=t[e];if(void 0!==i)return i.exports;var s=t[e]={exports:{}};return r[e].call(s.exports,s,s.exports,n),s.exports}n.m=r,e=[],n.O=(r,t,i,s)=>{if(!t){var a=1/0;for(c=0;c<e.length;c++){for(var[t,i,s]=e[c],o=!0,l=0;l<t.length;l++)(!1&s||a>=s)&&Object.keys(n.O).every((e=>n.O[e](t[l])))?t.splice(l--,1):(o=!1,s<a&&(a=s));if(o){e.splice(c--,1);var u=i();void 0!==u&&(r=u)}}return r}s=s||0;for(var c=e.length;c>0&&e[c-1][2]>s;c--)e[c]=e[c-1];e[c]=[t,i,s]},n.o=(e,r)=>Object.prototype.hasOwnProperty.call(e,r),(()=>{var e={522:0,830:0,281:0,10:0,870:0};n.O.j=r=>0===e[r];var r=(r,t)=>{var i,s,[a,o,l]=t,u=0;for(i in o)n.o(o,i)&&(n.m[i]=o[i]);if(l)var c=l(n);for(r&&r(t);u<a.length;u++)s=a[u],n.o(e,s)&&e[s]&&e[s][0](),e[a[u]]=0;return n.O(c)},t=self.webpackChunk=self.webpackChunk||[];t.forEach(r.bind(null,0)),t.push=r.bind(null,t.push.bind(t))})(),n.O(void 0,[830,281,10,870],(()=>n(151))),n.O(void 0,[830,281,10,870],(()=>n(753))),n.O(void 0,[830,281,10,870],(()=>n(5))),n.O(void 0,[830,281,10,870],(()=>n(683)));var i=n.O(void 0,[830,281,10,870],(()=>n(295)));i=n.O(i)})();
//# sourceMappingURL=main.js.map