!function(e,t){if("object"==typeof exports&&"object"==typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var o=t();for(var n in o)("object"==typeof exports?exports:e)[n]=o[n]}}(Depicter,(function(){return function(){"use strict";var e={d:function(t,o){for(var n in o)e.o(o,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:o[n]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r:function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};e.r(t),e.d(t,{dpcIframe:function(){return o}});const o={component:e=>{const{className:t="dpc-iframe",src:o="",title:n="",disableScroll:r,fullscreen:c,layer:i}=e,l=document.createElement("div");l.classList.add(t);const a=document.createElement("iframe");a.title=n,r&&(a.scrolling="no"),c&&(a.allow="fullscreen");const d=()=>{i.holder.active&&"leaving"!==i.holder.status&&i.bpVisible&&(a.src=o)},s=()=>{a.src="about:blank"};return i.holder.on("activated",d,i),i.holder.on("deactivated",s,i),i.on("visibilityChange",((e,t,o)=>{o?o&&s():d()})),l.appendChild(a),d(),l},async:!1,pureScript:!0};return t}()}));