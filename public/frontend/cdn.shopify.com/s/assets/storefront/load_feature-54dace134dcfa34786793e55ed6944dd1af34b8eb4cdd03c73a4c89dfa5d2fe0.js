!function(){var e=function(e){var t={exports:{}};return e.call(t.exports,t,t.exports),t.exports},d=function(){function r(e,t){var r=[],n=!0,o=!1,i=undefined;try{for(var u,a=e[Symbol.iterator]();!(n=(u=a.next()).done)&&(r.push(u.value),!t||r.length!==t);n=!0);}catch(d){o=!0,i=d}finally{try{!n&&a["return"]&&a["return"]()}finally{if(o)throw i}}return r}return function(e,t){if(Array.isArray(e))return e;if(Symbol.iterator in Object(e))return r(e,t);throw new TypeError("Invalid attempt to destructure non-iterable instance")}}(),_=function(e){return e&&e.__esModule?e:{"default":e}},n=function(e){if(Array.isArray(e)){for(var t=0,r=Array(e.length);t<e.length;t++)r[t]=e[t];return r}return Array.from(e)},j=e(function(e,t){"use strict";function r(e){"loading"!==document.readyState?e():document.addEventListener?document.addEventListener("DOMContentLoaded",e):document.attachEvent("onreadystatechange",function(){"loading"!==document.readyState&&e()})}Object.defineProperty(t,"__esModule",{value:!0}),t["default"]=r}),l=e(function(e,t){"use strict";function r(e){return new Error('The feature { name: "'+e.name+'", version: "'+e.version+'"} does not exist')}function n(e){return new Error("Could not create registry entry "+e)}function o(e){return new Error(e+" already exists in lookup.")}function i(e){return new Error("Features should be an Array. Received: "+JSON.stringify(e))}function u(e){return new Error('Features should be defined as `{ name: "name", version: "version" }`. Received: '+JSON.stringify(e))}function a(e,t){return new Error(e+" has already been loaded at version "+t)}Object.defineProperty(t,"__esModule",{value:!0}),t.featureNotFound=r,t.couldNotCreateEntry=n,t.couldNotAddToQuerySelectors=o,t.invalidFeaturesArray=i,t.invalidFeature=u,t.alreadyLoaded=a}),O=e(function(e,t){"use strict";function u(e,t,r,n){var o=2<arguments.length&&r!==undefined?arguments[2]:{},i=3<arguments.length&&n!==undefined?arguments[3]:null;if(s[e])throw(0,l.couldNotCreateEntry)(e);var u=e.split("@"),a=u[0],d=u[1];s[e]={src:t,props:o,betaFlag:i,scriptId:e,name:a,version:d}}function r(){a={}}function n(t,e){var r=1<arguments.length&&e!==undefined?arguments[1]:null,n={modern:function o(e){return window.Shopify.modules&&u(t,e,{type:"module"},r),n},legacy:function i(e){return window.Shopify.modules||u(t,e,{nomodule:""},r),n}};return n}function o(t){return{register:function r(e){return n(e,t)}}}function i(e){var t=e.name+"@"+e.version,r=s[t];if(!r)throw(0,l.featureNotFound)(e);var n=r.name,o=r.version;if(a[n]&&a[n]!==o)throw(0,l.alreadyLoaded)(t,a[n]);return a[n]=o,r}Object.defineProperty(t,"__esModule",{value:!0}),t.register=undefined,t.reset=r,t.beta=o,t.getEntry=i;var s={},a={};t.register=n}),E=e(function(e,t){"use strict";function r(){o=null}function n(e){if(o)return o[e];var t=document.querySelector("#shopify-features");if(t)try{return o=JSON.parse(t.innerHTML).betas.reduce(function(e,t){return e[t]=!0,e},{}),n(e)}catch(r){}return o={},n(e)}Object.defineProperty(t,"__esModule",{value:!0}),t.resetBetas=r,t["default"]=n;var o=null}),c=e(function(e,t){"use strict";function r(){}Object.defineProperty(t,"__esModule",{value:!0}),t["default"]=r}),v=e(function(e,t){"use strict";function s(e){return-1<l.indexOf(e)}function f(e){return-1<c.indexOf(e)}function r(e,t){function r(){l.push(d),i(),t(null,d)}function n(){c.push(d),i(),t(new Error("load error: "+u))}function o(){d.addEventListener("load",r),d.addEventListener("error",n)}function i(){d.removeEventListener("load",r),d.removeEventListener("error",n)}var u=e.src,a=e.props,d=document.querySelector('script[src="'+u+'"]');d&&s(d)?r():d&&f(d)?n():d?o():(d=document.createElement("script"),Object.keys(a).forEach(function(e){d.setAttribute(e,a[e])}),null===d.getAttribute("defer")&&d.setAttribute("defer",""),d.src=u,d.crossorigin="anonymous",o(),document.head.appendChild(d))}Object.defineProperty(t,"__esModule",{value:!0}),t["default"]=r;var l=[],c=[]}),i=e(function(e,t){"use strict";function o(e,a,d){return e.reduce(function(e,t){var r=t.onLoad||f["default"];try{var n=(0,O.getEntry)(t),o=n.betaFlag,i=!o||(0,s["default"])(o);if(d&&!i)throw(0,l.featureNotFound)(t);i&&e.push([n,t])}catch(u){r(u),a.push(u)}return e},[])}function i(e,o,i){var u=e.length;0!==u?e.forEach(function(e){var t=d(e,2),r=t[0],n=t[1];(0,a["default"])(r,function(e,t){var r=n.onLoad||f["default"];e&&(r(e),o.push(e)),t&&r(null),0===--u&&i(o)})}):i(o)}function r(e,t,r){var n=[];i(o(e,n,t),n,function(e){var t=0===e.length?null:e;r(t)})}function n(e,t){r(e,!0,t)}function u(e,t){r(e,!1,t)}Object.defineProperty(t,"__esModule",{value:!0}),t.loadMultiple=r,t.loadMultipleErrorIfNotInBeta=n,t.loadMultipleSilentIfNotInBeta=u;var s=_(E),f=_(c),a=_(v)}),u=e(function(e,t){"use strict";function r(e){if(!e||"string"!=typeof e.name||"string"!=typeof e.version)throw(0,l.invalidFeature)(e)}Object.defineProperty(t,"__esModule",{value:!0}),t["default"]=r}),M=e(function(e,t){"use strict";function r(e,t){var r=t||o["default"];if(Array.isArray(e))return e.forEach(n["default"]),void(0,i.loadMultipleErrorIfNotInBeta)(e,r);throw(0,l.invalidFeaturesArray)(e)}Object.defineProperty(t,"__esModule",{value:!0}),t["default"]=r;var n=_(u),o=_(c)}),a=e(function(e,t){"use strict";function r(){function e(e,t){function r(n){return t.map(function(e){var t=e.name,r=e.version;return t&&r?{name:t,version:r}:{name:t,version:n.getAttribute("data-shopify-feature")}})}if(o[e])throw(0,l.couldNotAddToQuerySelectors)(e);o[e]=r}function t(){return Object.keys(o).reduce(function(e,t){var r=document.querySelector(t);if(!r)return e;var n=(0,o[t])(r);return delete o[t],e.concat(n)},[])}var o={};return{add:e,getFeatures:t}}Object.defineProperty(t,"__esModule",{value:!0}),t["default"]=r}),S=e(function(e,t){"use strict";function r(e){var t=e||n["default"];(0,i.loadMultipleSilentIfNotInBeta)(o.getFeatures(),t)}Object.defineProperty(t,"__esModule",{value:!0}),t["default"]=r;var n=_(c),o=(0,_(a)["default"])();o.add("model-viewer[data-shopify-feature]",[{name:"model-viewer"}]),o.add("video",[{name:"video-analytics",version:"0.1"}])}),A=e(function(e,t){"use strict";function r(n){var e=null;return{get isObserving(){return Boolean(e)},enable:function t(){this.isObserving||(e=new MutationObserver(function(e){for(var t=!1,r=0;r<e.length;r++)if(e[r].addedNodes.length){t=!0;break}t&&n()})).observe(document.body,{childList:!0,subtree:!0})},disable:function r(){this.isObserving&&(e.disconnect(),e=null)}}}Object.defineProperty(t,"__esModule",{value:!0}),t["default"]=r}),F=e(function(e,t){"use strict";function r(e,t){var r=window.Shopify[e]&&window.Shopify[e].q;r&&Array.isArray(r)&&r.forEach(function(e){t.apply(undefined,n(e))}),window.Shopify[e]=t}Object.defineProperty(t,"__esModule",{value:!0}),t["default"]=r});e(function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.resetRegistry=t.resetBetas=t.beta=t.register=undefined;var r=_(j),n=_(M),o=_(S),i=_(A),u=_(F);t.register=O.register,t.beta=O.beta,t.resetBetas=E.resetBetas,t.resetRegistry=O.reset,window.Shopify=window.Shopify||{};var a="https://cdn.shopify.com/shopifycloud",d=a+"/model-viewer",s="model-viewer.js",f="model-viewer-legacy.js";(0,O.register)("model-viewer@0.6").modern(d+"/v0.6/"+s).legacy(d+"/v0.6/"+f),(0,O.register)("model-viewer@0.7").modern(d+"/v0.7/"+s).legacy(d+"/v0.7/"+f);var l=a+"/model-viewer-ui/assets",c="model-viewer-ui.en.js",v="model-viewer-ui-legacy.en.js";(0,O.register)("model-viewer-ui@1.0").modern(l+"/v1.0/"+c).legacy(l+"/v1.0/"+v);var y=a+"/shopify-xr-js/assets",p="shopify-xr.en.js";(0,O.register)("shopify-xr@1.0").modern(y+"/v1.0/"+p);var h=a+"/shopify-plyr",m="shopify-plyr.en.js",g="shopify-plyr-legacy.en.js";(0,O.register)("video-ui@1.0").modern(h+"/v1.0/"+m).legacy(h+"/v1.0/"+g);var b="rich-media-storefront-analytics",w=a+"/media-analytics";(0,O.beta)(b).register("video-analytics@0.1").modern(w+"/v0.1/video.js").legacy(w+"/v0.1/video-legacy.js"),(0,r["default"])(function(){function e(){(0,o["default"])(function(e){if(e)throw e[0]})}(0,u["default"])("loadFeatures",n["default"]),(0,u["default"])("autoloadFeatures",o["default"]),e(),(0,i["default"])(e).enable()})})}("undefined"!=typeof global?global:"undefined"!=typeof window&&window);