(()=>{var r={172:()=>{$("#slider_range").slider({formatter:function(r){}});let r=$("#slider_range").attr("value");$("#sum_capital").html(+r),$("#sum_res").html(Math.round(1.8*r)),$(document).on("input change","#slider_range",(function(){$("#sum_capital").html($(this).val()),$("#sum_res").html(Math.round(1.834*$(this).val()))}))}},t={};function e(a){var n=t[a];if(void 0!==n)return n.exports;var o=t[a]={exports:{}};return r[a](o,o.exports,e),o.exports}e.n=r=>{var t=r&&r.__esModule?()=>r.default:()=>r;return e.d(t,{a:t}),t},e.d=(r,t)=>{for(var a in t)e.o(t,a)&&!e.o(r,a)&&Object.defineProperty(r,a,{enumerable:!0,get:t[a]})},e.o=(r,t)=>Object.prototype.hasOwnProperty.call(r,t),(()=>{"use strict";e(172)})()})();