!function(){var a={NODE:false,ENDER:false,either:function(b,c){if(a.NODE||!c){return b
}return c
},run:function(b,c){return a.either(b,c)()
}};
if(typeof module!=="undefined"&&typeof require!=="undefined"){a.NODE=true
}else{if(typeof require!=="undefined"&&typeof provide!=="undefined"){a.ENDER=true
}}a.run(function(){module.exports=a
},function(){provide("std::env",a)
})
}();
!function(){var a=require("underscore");
a.mixin({args:function(c,d,b){if(!d){d=0
}if(!b){b=c.length
}return Array.prototype.slice.call(c,d,b)
},log:function(b){if(typeof console!=="undefined"&&console.log){console.log(b)
}return b
},inherit:(function(){var b=function(){};
return function(d,c){b.prototype=d.prototype;
c.prototype=new b();
c.prototype.constructor=c;
a.extend(c,d);
return c
}
}()),nextTick:function(b){if(typeof process!=="undefined"&&process.nextTick){process.nextTick(b)
}else{if(typeof window!=="undefined"&&window.setImmediate){window.setImmediate(b)
}else{setTimeout(b,0)
}}},combine:function(){var b=a.chain(arguments).args().flatten().value();
return function(){var d=a.args(arguments),c=0,e=b.length;
for(c,e;
c<e;
c++){b[c].apply(null,d)
}}
},callback:function(){var b=a.chain(arguments).args().flatten().hashify().value().optional("ctx",null,{type:"object"}).required("callback").many("rest").end;
if(b.callback){b.callback.apply(b.ctx,b.rest)
}},hashify:(function(){var b=function(f,d,e){var h,g=false;
if(a.has(d,f)){h=d[f];
if(typeof h==="object"&&a.has(h,"not")){h=h[f];
g=true
}return !(g===e(h))
}return true
};
var c=function(m,h,i,e){var g=true,d="length",j=">"+d,l=">="+d,k="<"+d,f="<="+d;
if(typeof e==="function"){return e(m,h,i)
}if(typeof e==="boolean"){return e
}g=b("type",e,function(n){return typeof m===n
});
g=g&&b("instance",e,function(n){return m instanceof n
});
g=g&&b(d,e,function(n){return i.length===n
});
g=g&&b(j,e,function(n){return i.length>n
});
g=g&&b(l,e,function(n){return i.length>=n
});
g=g&&b(k,e,function(n){return i.length<n
});
g=g&&b(f,e,function(n){return i.length<=n
});
return g
};
return function(d){var e=0;
if(!a.isArray(d)){d=a.args(d)
}return{end:{},required:function(f){this.end[f]=d[e];
e++;
return this
},optional:function(h,g,f){var j=d[e],i=g,k=c(j,e,d,f);
if(k){e++;
i=j
}this.end[h]=i;
return this
},many:function(h,f){var i,g=[],j=true;
if(f){while(j&&e<d.length){i=d[e];
j=c(i,e,d,f);
if(j){e++;
g.push(i)
}}}else{g=d.slice(e)
}this.end[h]=g;
return this
}}
}
}())});
if(typeof provide!=="undefined"){provide("std::utils",a)
}else{module.exports=a
}}();
!function(){var a=typeof provide==="undefined"?require("./env"):require("std::env");
var b=require(a.either("./utils","std::utils"));
var c=function(){this._events={};
this._maxListeners=10
};
c.prototype.listeners=function(d){if(!this._events[d]){this._events[d]=[]
}return this._events[d]
};
c.prototype.setMaxListeners=function(d){this._maxListeners=d
};
c.prototype.on=c.prototype.addListener=function(d,f){this.emit("newListener",f);
var e=this.listeners(d);
e.push(f);
if(e.length>=this._maxListeners){b.log("Warning: "+this+" has more than "+this._maxListeners+" attached to event "+d+".")
}return this
};
c.prototype.once=function(d,e){var f={listener:e};
this.listeners(d).push(f);
this.emit("newListener",f);
return this
};
c.prototype.removeListener=function(d,g){var e,f=this.listeners(d);
for(e=0;
e<f.length;
e++){if(f[e]===g){f.splice(e,1);
break
}}return this
};
c.prototype.removeAllListeners=function(d){this._events[d]=[];
return this
};
c.prototype.emit=function(){var f,j,d=arguments[0],e=b.args(arguments,1),h=this._events[d]||[],i=h.length!==0,g=[];
for(f=0;
f<h.length;
f++){j=h[f];
if(typeof j==="object"){g.push(f);
j=j.listener
}j.apply(this,e)
}for(f=0;
f<g.length;
f++){h.splice(g[f]-f,1)
}return i
};
a.run(function(){module.exports=c
},function(){provide("std::emitter",c)
})
}();
!function(){var d=require(typeof provide==="undefined"?"./env":"std::env");
var k=require(d.either("./utils","std::utils"));
var o=d.run(function(){return require("events").EventEmitter
},function(){return require("std::emitter")
});
var c="done",f="cancel";
var j=function(v,y){var u,p,x,r,q,t=false,w=true,s=null;
this._internal={emitter:new o(),count:0,isDone:false,isCancelled:false,err:null,data:null,callback:y};
for(u=0,p=v.length;
u<p;
u++){x=v[u];
r=x._internal;
t=t||r.isCancelled;
s=r.err;
q=r.isDone&&!t;
w=w&&q;
if(t){break
}if(!q){this._internal.count++;
x.done(h(this));
x.cancel(i(this))
}}if(w){a(this)
}if(t){n(this,s)
}};
j.prototype.isDone=function(){return this._internal.isDone
};
j.prototype.isCancelled=function(){return this._internal.isCancelled
};
j.prototype.error=function(){return this._internal.err
};
j.prototype.data=function(){return this._internal.data
};
j.prototype.done=function(p){var q=this._internal;
if(!q.isCancelled){p=k.bind(p,this);
if(q.isDone){p(q.data)
}else{q.emitter.on(c,p)
}}return this
};
j.prototype.cancel=function(p){var q=this._internal;
if(!q.isDone){p=k.bind(p,this);
if(q.isCancelled){p(q.err)
}else{q.emitter.on(f,p)
}}return this
};
j.prototype.removeDone=function(p){this._internal.emitter.removeListener(c,p)
};
j.prototype.removeCancelled=function(p){this._internal.emitter.removeListener(f,p)
};
var a=function(q){var p=q._internal;
if(!p.isCancelled&&!p.isDone){p.callback.call(q,e(q),l(q))
}};
var m=function(q){var p=q._internal;
p.count--;
if(p.count===0){a(q)
}};
var g=function(r,p){var q=r._internal;
if(q.isDone||q.isCancelled){return
}q.isDone=true;
q.data=p;
q.emitter.emit(c,p);
q.emitter=new o()
};
var n=function(r,p){var q=r._internal;
if(q.isDone||q.isCancelled){return
}q.isCancelled=true;
q.err=p;
q.emitter.emit(f,p);
q.emitter=new o()
};
var h=function(p){return k.once(function(){m(p)
})
};
var i=function(p){return k.once(function(q){n(p,q)
})
};
var e=function(p){return k.once(function(q){g(p,q)
})
};
var l=function(p){return k.once(function(q){n(p,q)
})
};
var b=function(){var p=k.chain(arguments).args().flatten().hashify().value().many("dependencies",{instance:j}).required("callback").end;
return new j(p.dependencies,p.callback)
};
d.run(function(){module.exports=b
},function(){provide("std::wait",b)
})
}();
!function(){var a=require(typeof provide==="undefined"?"./env":"std::env");
var c=require(a.either("./wait","std::wait"));
var b=function(){this._internal={promise:c(function(d){d()
})}
};
b.prototype.enqueue=function(d){var f=this._internal;
var e=f.promise=c(f.promise,d);
e.cancel(function(){if(f.promise===this){f.promise=c(function(g){g()
})
}});
return e
};
b.prototype.top=function(){return this._internal.promise
};
if(typeof provide==="undefined"){module.exports=b
}else{provide("std::async-queue",b)
}}();
!function(){var a=require(typeof provide==="undefined"?"./env":"std::env");
var m=a.run(function(){return require("events").EventEmitter
},function(){return require("std::emitter")
});
var k=require(a.either("./utils","std::utils")),e=require(a.either("./wait","std::wait"));
var f="set:",h="destroy:",j="invalidate:",g="change:";
var i=k.inherit(m,function(){m.call(this);
this._data={};
this._loading={};
l(this)
});
i.serialize=function(q,n){var p,o;
this.serial=this.serial||{};
o=this.serial[q]=this.serial[q]||{};
for(p in n){if(k.has(n,p)){o[p]=n[p]
}}};
i.prototype.get=function(n,o){if(o){if(this._data.hasOwnProperty(n)){o(null,this._data[n])
}else{this.load(n,o)
}}else{return d(this,[],n)
}};
function d(n,q,o){var p=e(q,function(r,s){n=typeof n==="function"?n():n;
n.get(o,function(t,u){t?s(t):r(u)
})
});
p.get=function(s,t){var r=function(){return p.data()
};
if(s&&t){p.done(function(u){r().get(s,t)
});
p.cancel(function(u){t(u)
});
return
}return d(r,[p],s)
};
return p
}i.prototype.invalidate=function(n,q){var p=this;
if(k.has(this._data,n)){delete this._data[n]
}var o=e(function(r,s){p.load(n,function(t,u){if(t){s(t)
}else{r(u)
}if(q){q(t,u)
}})
});
this.emit(j+n,o)
};
i.prototype.load=function(o,q){var p=this,n=this._data[o];
if(this._loading[o]){this._loading[o].push(q);
return
}this._loading[o]=[];
if(q){this._loading[o].push(q)
}b(this,"get",o,function(r,s){if(!r){p._data[o]=s;
p.emit(g+o,n,s);
k.each(p._loading[o],function(t){t.call(p,null,s)
})
}else{k.each(p._loading[o],function(t){t.call(p,r)
})
}delete p._loading[o]
})
};
i.prototype.set=function(o,p,q){var n=this._data[o];
if(n!==p){this._data[o]=p;
this.emit(f+o,n,p);
this.emit(g+o,n,p);
b(this,"set",o,q)
}else{k.callback(q,null,p)
}};
i.prototype.destroy=function(n,o){if(this._data.hasOwnProperty(n)){delete this._data[n];
this.emit(h+n,value);
b(this,"destroy",n,o)
}else{k.callback(o,null)
}};
var l=function(n){var r,q,p=n.constructor,o=p.serial;
if(o){for(r in o){if(k.has(o,r)){c(n,o[r],r)
}}}};
var c=function(n,o,p){if(k.has(o,"init")){o.init.call(n,function(q,r){if(!q){n._data[p]=r
}else{k.log(q)
}})
}};
var b=function(n,s,q,t){var r,p=n.constructor,o=p.serial;
if(o){if(k.has(o,q)){r=o[q];
if(k.has(r,s)){k.nextTick(function(){r[s].call(n,t)
});
return
}}}k.nextTick(function(){k.callback(n,t,"No serializer!",null)
})
};
a.run(function(){module.exports=i
},function(){provide("std::cache",i)
})
}();
!function(){var a=require(typeof provide==="undefined"?"./env":"std::env");
var e=a.run(function(){return require("events").EventEmitter
},function(){return require("std::emitter")
});
var b=require(a.either("./utils","std::utils"));
var d=b.inherit(e,function(g,f){e.call(this);
this.time=g||0;
this._internal={on:false,looping:f||false}
});
d.prototype.start=function(){if(!this._internal.on){this._internal.on=true;
this._internal.countdown=0;
this.emit("start");
c(this,this.time)
}};
d.prototype.stop=function(){if(this._internal.on){this._internal.on=false;
this._internal.countdown=0;
this.emit("stop")
}};
var c=function(h,g){var f=new Date;
setTimeout(function(){var j=(new Date)-f,i=h._internal;
if(i.on){h.emit("tick",j,g);
if(i.looping){c(h,g)
}else{h.stop()
}}},g)
};
a.run(function(){module.exports=d
},function(){provide("std::alarm",d)
})
}();
!function(){var a=require(typeof provide==="undefined"?"./env":"std::env");
var c=a.run(function(){return require("./alarm")
},function(){return require("std::alarm")
});
function b(e){this._internal={a:new c(e,true)};
this._internal.a.start()
}b.prototype.setInterval=function(e,f){var g=d(e,f);
this._internal.a.on("tick",g);
return g
};
b.prototype.clearInterval=function(e){this._internal.a.removeListener("tick",e)
};
b.prototype.setTimeout=function(e,g){var f=this;
var h=d(function(){f._internal.a.removeListener("tick",h);
e()
},g);
h._isTimeout=true;
this._internal.a.on("tick",h);
return h
};
b.prototype.clearTimeout=function(h){if(h){this._internal.a.removeListener("tick",h)
}else{var g,i,j,e=this._internal.a.listeners("tick"),f=[];
for(g=0,i=e.length;
g<i;
g++){j=e[g];
if(j._isTimeout){f.push(j)
}}for(g=0,i=f.length;
g<i;
g++){this._internal.a.removeListener("tick",f[g])
}}};
b.prototype.start=function(){this._internal.a.start()
};
b.prototype.stop=function(){this._internal.a.stop()
};
function d(f,g){var e=0;
return function(h){e+=h;
if(e>=g){e-=g;
f()
}}
}a.run(function(){module.exports=b
},function(){provide("std::timing",b)
})
}();
require=function(h,g,l){function k(e,d){if(!g[e]){if(!h[e]){var b="function"==typeof require&&require;
if(!d&&b){return b(e,!0)
}if(j){return j(e,!0)
}throw new Error("Cannot find module '"+e+"'")
}var a=g[e]={exports:{}};
h[e][0].call(a.exports,function(c){var f=h[e][1][c];
return k(f?f:c)
},a,a.exports)
}return g[e].exports
}for(var j="function"==typeof require&&require,i=0;
i<l.length;
i++){k(l[i])
}return k
}({1:[function(d,c){c.exports=function(){function b(){}return b.prototype.on=function(f,e){f&&e&&(this.queue||(this.queue={}),this.queue[f]||(this.queue[f]=[]),this.queue[f].push(e))
},b.prototype.off=function(f,e){return f?(this.queue&&this.queue[f]&&(this.queue[f]=e?this.queue[f].filter(function(g){return g!==e
}):[]),void 0):(this.queue={},void 0)
},b.prototype.emit=function(f){var e=Array.prototype.slice.call(arguments,1);
f&&this.queue&&this.queue[f]&&this.queue[f].forEach(function(g){g.apply(this,e)
},this)
},b.mixin=function(a){Object.keys(b.prototype).forEach(function(e){a.prototype[e]=b.prototype[e]
})
},b
}
},{}],2:[function(d,c){c.exports=function(f,e,g){if(!e){throw new TypeError("assert: errorMessage is required")
}if(!f){if(g=g||Error,e instanceof Error){throw e
}if("string"==typeof e){throw new g(e)
}}}
},{}],3:[function(d,c){c.exports=function(f){function e(j){var i;
switch(j){case"sm":i=h.sm;
break;
case"md":i=h.md;
break;
case"lg":i=h.lg
}return i
}var h={sm:"(max-width: 767px)",md:"(min-width: 768px) and (max-width: 1199px)",lg:"(min-width: 1200px)"},g={on:function(k,j){var i,b=this,a=e(k);
return a?(i=f.matchMedia(a),i.addListener(function(l){j.call(b,l)
}),j(i),function(){i.removeListener(j)
}):!1
},is:function(b){var a=e(b);
return a?f.matchMedia(a).matches:!1
}};
return g
}
},{}],4:[function(e,d){var f=e("./assert");
d.exports=function(g,c){function h(a,i){f(a,"Element selector is required"),i||(i=h.defaultOptions),this.$element=g(a),f(1===this.$element.length,"Selector "+a+" matches "+this.$element.length+" elements"),f(!this.$element.data()["o2-modal"],"This modal already has an instance attached"),this.$trigger=g(i.trigger),1!==this.$trigger.length?this.$trigger=g():f(!this.$trigger.data()["o2-modal"],"This modal trigger already has an instance attached"),this.$container=g(i.container),1!==this.$container.length&&(this.$container=g("body")),1!==this.$element.closest(this.$container).length&&this.$element.appendTo(this.$container),"undefined"==typeof this.$container.data()["o2-modal-instances"]&&(this.$container.data()["o2-modal-instances"]=[],this.$container.data()["o2-modal-open"]=0),this.$container.is("body")||this.$element.addClass("modal-absolute"),this.$element.attr("aria-hidden","true").reflow().on("click.o2-modal",'[data-behavior="modal-close"]',this.close.bind(this)),this.$trigger.on("click.o2-modal",this.open.bind(this)),i.sticky||(this.$element.on("click.o2-modal",function(j){g(j.target).is(".modal-cell")&&this.close(j)
}.bind(this)),this.$container.on("keyup.o2-modal",function(j){var k=27;
j.which===k&&g(j.target).is(":not(input)")&&this.close()
}.bind(this))),this.$element.data()["o2-modal"]=this,this.$trigger.length&&(this.$trigger.data()["o2-modal"]=this),this.$container.data()["o2-modal-instances"].push(this)
}return c.mixin(h),h.defaultOptions={sticky:!1},h.bind=function(a){var j=this,i=[];
return g(a||"body").find('[role="dialog"]').each(function(){var k=g(this),o=g(k.data("trigger")),n=g(k.data("container")),m=!!k.data("sticky");
if(!k.data()["o2-modal"]){try{i.push(new j(k,{trigger:o,container:n,sticky:m}))
}catch(l){}}}),i
},h.prototype.open=function(b){b&&b.preventDefault(),"true"===this.$element.attr("aria-hidden")&&this.$element.attr("aria-hidden","false").afterTransition(function(){this.$element.reflow(),this.currentScrollTop=this.$container.scrollTop(),this.$container.css({top:-this.currentScrollTop}),0===this.$container.data()["o2-modal-open"]++&&this.$container.addClass("modal-open"),this.emit("open",this)
}.bind(this))
},h.prototype.close=function(b){b&&b.preventDefault(),"false"===this.$element.attr("aria-hidden")&&(1===this.$container.data()["o2-modal-open"]--&&(this.$container.removeClass("modal-open"),this.$container.scrollTop(this.currentScrollTop)),this.$element.removeAttr("aria-hidden").afterTransition(function(){this.$element.attr("aria-hidden","true").reflow(),this.emit("close",this,b)
}.bind(this)))
},h.prototype.dispose=function(){this.close(null),delete this.$element.data()["o2-modal"],this.$element.removeClass("modal-absolute").removeAttr("aria-hidden").off(".o2-modal").detach(),this.$trigger.length&&delete this.$trigger.data()["o2-modal"],this.$trigger.off(".o2-modal"),this.$container.data()["o2-modal-instances"]=this.$container.data()["o2-modal-instances"].filter(function(b){return b!==this
}.bind(this)),0===this.$container.data()["o2-modal-instances"].length&&(delete this.$container.data()["o2-modal-instances"],delete this.$container.data()["o2-modal-open"],this.$container.off(".o2-modal"))
},h
}
},{"./assert":2}],5:[function(d,c){c.exports=function(f,e,h){function g(a,i){if(i&&(!/^#./.test(i)||!f(i).length)){throw new Error("The data-transition-at attribute value must be an id")
}this.$body=f("body"),this.$el=f(a),this.$scrollElement=f(h),this.$placeholder=f('<div class="subnav-placeholder">'),this.$list=this.$el.find(".subnav-list"),this.$links=this.$el.find("a"),this.$icon=this.$el.find(".subnav-icon-toggle"),this.isSticky=!!this.$el.attr("data-sticky"),this.isSticky&&(this.$transitionElement=i?f(i):this.$el,this.transitionOffset=this.$transitionElement.offset().top,this.offsets=[],this.targets=[],this.isContextual=!!i,this.isPinned=!1,this.activeTarget=null,this.isContextual||this.$placeholder.insertAfter(this.$el),this.refreshSticky(),this.processSticky(),this.$scrollElement.on("scroll",f.proxy(this.processSticky,this))),this.$el.find("a").on("click",f.proxy(this.clickHandler,this))
}return g.bind=function(a){var j=this,i=[];
return f(a||"body").find(".subnav").each(function(){var k=f(this),l=new j(this,k.data("transition-at")||null);
i.push(l)
}),i
},g.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||this.$body[0].scrollHeight
},g.prototype.refreshSticky=function(){var a=this,i=-5;
this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),this.$el.find("a").map(function(){var j=f(this),l=j.attr("href"),k=/^#./.test(l)&&f(l);
return k&&k.length&&k.is(":visible")?[[k.offset().top,l]]:null
}).sort(function(k,j){return k[0]-j[0]
}).each(function(){a.offsets.push(Math.max(this[0]+i,0)),a.targets.push(this[1])
}),this.isContextual||this.$placeholder.height(this.$transitionElement.outerHeight())
},g.prototype.processSticky=function(){var r,q=this.$scrollElement.scrollTop(),p=this.getScrollHeight(),o=p-this.$scrollElement.height(),n=this.offsets,m=this.targets,l=this.transitionOffset,k=this.activeTarget,j=this.isPinned;
if(this.scrollHeight!==p&&this.refreshSticky(),(q>=l&&!j||l>q&&j)&&this.togglePinned(),m.length&&q>=o){return k!==(r=m[m.length-1])&&this.highlightItem(r)
}if(m.length&&k&&q<=n[0]){return k!==(r=m[0])&&this.highlightItem(r)
}for(r=n.length;
r--;
){k!==m[r]&&q>=n[r]&&(!n[r+1]||q<=n[r+1])&&this.highlightItem(m[r])
}},g.prototype.togglePinned=function(){var j=this.isPinned,i=this.isContextual;
i?this.$el.attr("aria-hidden",j):(this.$el.toggleClass("pinned",!j),this.$placeholder.toggleClass("placeholding",!j)),this.isPinned=!j
},g.prototype.highlightItem=function(j){var i=this.$el;
this.activeTarget=j,i.find('[aria-selected="true"]').attr("aria-selected","false"),i.find('[href="'+j+'"]').attr("aria-selected","true")
},g.prototype.clickHandler=function(i){var b=f(i.currentTarget),a="is-open";
(e.is("sm")||e.is("md"))&&(this.$icon.toggleClass("icon-chevron-down icon-remove"),"true"===b.attr("aria-selected")?(i.preventDefault(),this.$list.toggleClass(a)):this.$list.removeClass(a))
},g
}
},{}],6:[function(e,d){var f=e("./assert");
d.exports=function(g,c,j){function i(a){f(a,"Element selector is required");
var m=j&&j.location&&j.location.hash||null;
if(this.$element=g(a),f(1===this.$element.length,"Selector "+a+" matches "+this.$element.length+" elements"),f(!this.$element.data()["o2-tabs"],"This tab already has an instance attached"),this.$element.on("click.o2-tabs",'[role="tab"]',this.activateTarget.bind(this)).data()["o2-tabs"]=this,m){var l=m.substring(1),k=this.$element.find('[aria-controls="'+l+'"]');
k.length&&!h(k)&&this.activate(l)
}}function h(b){return"true"===b.attr("aria-disabled")
}return c.mixin(i),i.bind=function(a){var l=this,k=[];
return g(a||"body").find('[role="tablist"]').each(function(){if(!g(this).data()["o2-tabs"]){try{k.push(new l(g(this)))
}catch(m){}}}),k
},i.prototype.activateTarget=function(a){var k=g(a.currentTarget);
a.preventDefault(),h(k)||this.activate(g(a.currentTarget).attr("aria-controls"))
},i.prototype.activate=function(a){var o,n,m,l,k;
a&&(n=g("#"+a),l=this.$element.find('[aria-controls="'+a+'"]'),1===n.length&&1===l.length&&(k=this.$element.find('[aria-selected="true"]'),o=k.attr("aria-controls"),m=g(o?"#"+o:""),o!==a&&(m.attr("aria-hidden","true").reflow(),n.attr("aria-hidden","false").reflow(),k.attr("aria-selected","false").reflow(),l.attr("aria-selected","true").reflow(),j.history.replaceState&&this.$element.data("permalink")===!0&&j.history.replaceState(null,null,"#"+a),this.emit("activate",this,a))))
},i.prototype.dispose=function(){delete this.$element.data()["o2-tabs"],this.$element.off(".o2-tabs")
},i
}
},{"./assert":2}],7:[function(f,e){function h(d,c){return"Selector "+d+" matches "+c.length+" elements"
}var g=f("./assert");
e.exports=function(d,c){function i(a,m,l){var k;
this._timeout=null,this._delay=200,g(a,"Element selector is required"),g(m,"Trigger selector is required"),l||(l={}),this.$element=d(a),this.$trigger=d(m),this.sticky=!!l.sticky;
var j="This tooltip already has an instance attached";
switch(g(1===this.$element.length,h(a,this.$element)),g(1===this.$trigger.length,h(m,this.$trigger)),g(!this.$element.data()["o2-tooltip"],j),g(!this.$trigger.data()["o2-tooltip"],j),this.$element.appendTo(d("body")),k=this.$trigger.attr("title"),k&&(this.$trigger.attr("aria-label",k),this.$trigger.removeAttr("title")),this.$element.attr("aria-hidden","true").reflow(),l.event){case"none":break;
case"click":this.$trigger.on("click.o2-tooltip",this.toggle.bind(this));
break;
default:this.$trigger.on("mouseenter.o2-tooltip",this.show.bind(this)).on("mouseleave.o2-tooltip",this.hide.bind(this)),this.sticky&&this.$element.on("mouseenter.o2-tooltip",this.clearTimeout.bind(this)).on("mouseleave.o2-tooltip",this.hide.bind(this))
}this.$element.data()["o2-tooltip"]=this,this.$trigger.data()["o2-tooltip"]=this
}return c.mixin(i),i.template='<div class="tooltip {{position}}" role="tooltip">  <p class="panel-body">{{text}}</p></div>',i.bind=function(a){var k=this,j=[];
return a=a||"body",d(a).find('[role="tooltip"]').each(function(){var l=d(this),p=d(l.data("trigger")),o=!!l.data("sticky"),n=l.data("event");
if(!l.data()["o2-tooltip"]){try{j.push(new k(l,p,{event:n,sticky:o}))
}catch(m){}}}),d(a).find('[data-behavior="tooltip"][title]').each(function(){var m,t,s=d(this),r=s.data("position"),q=s.data("event"),p=!!s.data("sticky"),o=s.attr("title");
if(!s.data()["o2-tooltip"]){switch(r){case"bottom":t="tooltip-top-middle";
break;
case"right":t="tooltip-left-middle";
break;
case"left":t="tooltip-right-middle";
break;
default:t="tooltip-bottom-middle"
}m=d(i.template.replace("{{position}}",t).replace("{{text}}",o)).appendTo(s.parent());
try{j.push(new k(m,s,{event:q,sticky:p}))
}catch(n){}}}),j
},i.prototype.show=function(b){b&&b.preventDefault(),"true"===this.$element.attr("aria-hidden")&&(this.initializePosition(),this.$element.attr("aria-hidden","false").reflow(),this.emit("show",this))
},i.prototype.hide=function(k){if(k&&k.preventDefault(),this.clearTimeout(),"false"===this.$element.attr("aria-hidden")){var j=function(){this.$element.removeAttr("aria-hidden").afterTransition(function(){this.$element.attr("aria-hidden","true").reflow(),this.emit("hide",this,k)
}.bind(this))
}.bind(this);
this.sticky?this._timeout=setTimeout(j,this._delay):j()
}},i.prototype.clearTimeout=function(){this._timeout&&(clearTimeout(this._timeout),this._timeout=null)
},i.prototype.toggle=function(b){"true"===this.$element.attr("aria-hidden")?this.show(b):this.hide(b)
},i.prototype.dispose=function(){this.hide(null),delete this.$element.data()["o2-tooltip"],this.$element.removeAttr("aria-hidden").detach(),delete this.$trigger.data()["o2-tooltip"],this.$trigger.off(".o2-tooltip")
},i.caretSize=12,i.prototype.initializePosition=function(){var k,j,p,o={},n=["top","bottom","left","right"],m=24,l=20;
for(j={height:parseInt(this.$trigger.attr("height")||this.$trigger.css("height"),10),width:parseInt(this.$trigger.attr("width")||this.$trigger.css("width"),10),offset:this.$trigger.offset()},p={height:parseInt(this.$element.css("height"),10),width:parseInt(this.$element.css("width"),10),classes:this.$element.attr("class").split(" ")},k=0;
k<p.classes.length&&(0!==p.classes[k].indexOf("tooltip-")||(p.classes=p.classes[k].split("-").slice(1),-1===n.indexOf(p.classes[0])));
k++){}switch(p.classes[0]){case"top":o.top=j.offset.top+j.height+i.caretSize;
break;
case"bottom":o.top=j.offset.top-p.height-i.caretSize;
break;
case"left":o.left=j.offset.left+j.width+i.caretSize;
break;
case"right":o.left=j.offset.left-p.width-i.caretSize;
break;
default:throw new ReferenceError("Unknown primary position class name referenced")
}if(o.hasOwnProperty("top")){switch(p.classes[1]){case"left":o.left=j.offset.left,j.width<m&&(o.left-=m-j.width/2);
break;
case"middle":o.left=j.offset.left+j.width/2-p.width/2;
break;
case"right":o.left=j.offset.left+j.width-p.width,j.width<m&&(o.left+=m-j.width/2);
break;
default:throw new ReferenceError("Unknown secondary position class name referenced")
}}else{switch(p.classes[1]){case"top":o.top=j.offset.top,j.height<l&&(o.top-=l-j.height/2);
break;
case"middle":o.top=j.offset.top+j.height/2-p.height/2;
break;
case"bottom":o.top=j.offset.top+j.height-p.height,j.height<l&&(o.top+=l-j.height/2);
break;
default:throw new ReferenceError("Unknown secondary position class name referenced")
}}this.$element.css(o)
},i
}
},{"./assert":2}],Iwb2Ll:[function(d,c){c.exports=function(t,s){function r(f){var e=[];
return e=e.concat(n.bind(f)),e=e.concat(m.bind(f)),e=e.concat(l.bind(f)),e=e.concat(a.bind(f))
}function q(){s(window).off("load.o2")
}var p=d("./emitter")(),o=d("./modules/matchMedia")(t),n=d("./modules/modal")(s,p),m=d("./modules/subnav")(s,o,t),l=d("./modules/tabs")(s,p,t),a=d("./modules/tooltip")(s,p,t);
return d("./transitions")(t,s),d("./reflow")(s),s(window).on("load.o2",r.bind(this,null)),{bind:r,suppressBind:q,matchMedia:o,Modal:n,SubNav:m,Tabs:l,Tooltip:a}
}(window,$)
},{"./emitter":1,"./modules/matchMedia":3,"./modules/modal":4,"./modules/subnav":5,"./modules/tabs":6,"./modules/tooltip":7,"./reflow":9,"./transitions":10}],9:[function(d,c){c.exports=function(b){return b.fn.reflow?b:(b.extend(b.fn,{reflow:function(){return this.each(function(){b(this).addClass("o2-reflow").removeClass("o2-reflow").height()
}),this
}}),b)
}
},{}],10:[function(d,c){c.exports=function(f,e){return e.Transitions?e:(e.Transitions={timeout:600,events:{transition:"transitionend",OTransition:"oTransitionEnd",WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend"},eventName:function(){var h,g=!1;
for(h in this.events){if("undefined"!=typeof document.body.style[h]){g=this.events[h];
break
}}return this.eventName=function(){return g
},g
},supported:function(){return this.eventName()!==!1
}},e.extend(e.fn,{afterTransition:function(h,g){var b,a;
return g=Number(g),(!g||0>g)&&(g=e.Transitions.timeout),"function"!=typeof h&&(h=function(){}),b=e.Transitions.eventName(),this.each(function(){if(a=e.Event("transitionend"),a.target=a.currentTarget=this,b){var l,k=!1,j=function(i){k||(k=!0,h.call(this,i||a),e(this).off(b,j),f.clearTimeout(l))
}.bind(this);
e(this).on(b,j),l=f.setTimeout(j,g)
}else{h.call(this,a)
}}),this
}}),e)
}
},{}],o2:[function(d,c){c.exports=d("Iwb2Ll")
},{}]},{},["Iwb2Ll"]);
!function(c){function d(){}provide("o2-tooltip",d);
var b=(function(j,g){var h=false,i,k;
function f(m){var n=h;
if(!m){return f
}m=j(m);
if(m.is(k)){return f
}k=m;
if(!m.hasClass("modal-content")){m=m.removeClass("modal").addClass("modal-content").wrap('<div class="modal"><div class="modal-table"><div class="modal-cell"></div></div></div>')
}while(m.length&&!m.hasClass("modal")){m=m.parent()
}function l(o){return function(p){if(p===i){h=o
}k.trigger("modalTransitionStart",o).trigger("modalTransitionEnd",o).trigger(o?"modalOpen":"modalClose")
}
}if(n){i.close()
}i=m.data("o2-modal");
if(!i){i=new g(m,{sticky:k.hasClass("modal-sticky")});
i.on("open",l(true));
i.on("close",l(false))
}if(n){i.open()
}return f
}f.bind=function(){j("body").on("click",'.modal .close, .modal [data-modal-close="true"]',function(l){l.preventDefault();
f.close()
}).on("click",'a[rel="modal"]',function(l){l.preventDefault();
f(j(this).attr("href")).open()
})
};
f._toggle=function(m,n){function l(){if(typeof n==="function"){n()
}}if(h!==m){h=m;
if(k){k.one("modalTransitionEnd",l)
}if(i){i[m?"open":"close"]()
}}else{l()
}return f
};
f.open=function(l){return f._toggle(true,l)
};
f.close=function(l){return f._toggle(false,l)
};
f.toggle=function(l){return f._toggle(!h,l)
};
f.current=function(){return k
};
f.isOpen=function(){return h
};
return f
})(c,require("o2").Modal);
provide("o2-modal",b);
var e=(function(f){return{bind:function(){f("body").on("click",'[data-collapsible-role="toggle"]',function(j){var g=f(j.currentTarget),k=f(g.attr("href")),h=g.find('[data-collapsible-role="icon"]'),i=!h.hasClass("icon-caret-right");
if(k.length){j.preventDefault();
k.toggle();
h.toggleClass("icon-caret-right",i);
h.toggleClass("icon-caret-down",!i)
}})
}}
})(c);
var a=(function(g){function f(h){if(!h){throw new Error()
}this.$element=g(h);
if(this.$element.length!==1){throw new Error()
}this.$element.data("dropdown",this)
}f.bind=function(h){var j=[];
h=h||"body";
function i(m){var l,k;
for(l=0;
l<j.length;
l++){k=j[l];
if(m!==k){k.hide()
}}}g(h).find(".dropdown-toggle").each(function(){var n=g(this),k=n.parent(),l=k.find(".dropdown-menu"),o;
if(k.data("dropdown")){return
}try{o=new f(k)
}catch(m){}if(o){l.on("click",function(p){if(p.originalEvent){p.originalEvent.dropdown=o
}});
n.on("click",function(p){p.stopPropagation();
i(o);
o.toggle()
});
j.push(o)
}});
g(h).on("click",function(k){k.originalEvent=k.originalEvent||{};
i(k.originalEvent.dropdown)
})
};
f.prototype.show=function(h){if(h){h.preventDefault()
}if(this.$element.hasClass("open")){return
}this.$element.addClass("open");
this.$element.find(".icon-caret-up").removeClass("hide");
this.$element.find(".icon-caret-down").addClass("hide")
};
f.prototype.hide=function(h){if(h){h.preventDefault()
}if(!this.$element.hasClass("open")){return
}this.$element.removeClass("open");
this.$element.find(".icon-caret-down").removeClass("hide");
this.$element.find(".icon-caret-up").addClass("hide")
};
f.prototype.toggle=function(h){if(!this.$element.hasClass("open")){this.show(h)
}else{this.hide(h)
}};
return f
})(c);
provide("o2-dropdown",a);
c(window).on("load",function(){b.bind();
e.bind();
a.bind()
})
}($);
function FastClick(f,c){var g;
c=c||{};
this.trackingClick=false;
this.trackingClickStart=0;
this.targetElement=null;
this.touchStartX=0;
this.touchStartY=0;
this.lastTouchIdentifier=0;
this.touchBoundary=c.touchBoundary||10;
this.layer=f;
this.tapDelay=c.tapDelay||200;
if(FastClick.notNeeded(f)){return
}function h(j,i){return function(){return j.apply(i,arguments)
}
}var b=["onMouse","onClick","onTouchStart","onTouchMove","onTouchEnd","onTouchCancel"];
var e=this;
for(var d=0,a=b.length;
d<a;
d++){e[b[d]]=h(e[b[d]],e)
}if(deviceIsAndroid){f.addEventListener("mouseover",this.onMouse,true);
f.addEventListener("mousedown",this.onMouse,true);
f.addEventListener("mouseup",this.onMouse,true)
}f.addEventListener("click",this.onClick,true);
f.addEventListener("touchstart",this.onTouchStart,false);
f.addEventListener("touchmove",this.onTouchMove,false);
f.addEventListener("touchend",this.onTouchEnd,false);
f.addEventListener("touchcancel",this.onTouchCancel,false);
if(!Event.prototype.stopImmediatePropagation){f.removeEventListener=function(j,l,i){var k=Node.prototype.removeEventListener;
if(j==="click"){k.call(f,j,l.hijacked||l,i)
}else{k.call(f,j,l,i)
}};
f.addEventListener=function(k,l,j){var i=Node.prototype.addEventListener;
if(k==="click"){i.call(f,k,l.hijacked||(l.hijacked=function(m){if(!m.propagationStopped){l(m)
}}),j)
}else{i.call(f,k,l,j)
}}
}if(typeof f.onclick==="function"){g=f.onclick;
f.addEventListener("click",function(i){g(i)
},false);
f.onclick=null
}}var deviceIsAndroid=navigator.userAgent.indexOf("Android")>0;
var deviceIsIOS=/iP(ad|hone|od)/.test(navigator.userAgent);
var deviceIsIOS4=deviceIsIOS&&(/OS 4_\d(_\d)?/).test(navigator.userAgent);
var deviceIsIOSWithBadTarget=deviceIsIOS&&(/OS ([6-9]|\d{2})_\d/).test(navigator.userAgent);
var deviceIsBlackBerry10=navigator.userAgent.indexOf("BB10")>0;
FastClick.prototype.needsClick=function(a){switch(a.nodeName.toLowerCase()){case"button":case"select":case"textarea":if(a.disabled){return true
}break;
case"input":if((deviceIsIOS&&a.type==="file")||a.disabled){return true
}break;
case"label":case"video":return true
}return(/\bneedsclick\b|\bpac-item\b/).test(a.className)
};
FastClick.prototype.needsFocus=function(a){switch(a.nodeName.toLowerCase()){case"textarea":return true;
case"select":return !deviceIsAndroid;
case"input":switch(a.type){case"button":case"checkbox":case"file":case"image":case"radio":case"submit":return false
}return !a.disabled&&!a.readOnly;
default:return(/\bneedsfocus\b/).test(a.className)
}};
FastClick.prototype.sendClick=function(b,c){var a,d;
if(document.activeElement&&document.activeElement!==b){document.activeElement.blur()
}d=c.changedTouches[0];
a=document.createEvent("MouseEvents");
a.initMouseEvent(this.determineEventType(b),true,true,window,1,d.screenX,d.screenY,d.clientX,d.clientY,false,false,false,false,0,null);
a.forwardedTouchEvent=true;
b.dispatchEvent(a)
};
FastClick.prototype.determineEventType=function(a){if(deviceIsAndroid&&a.tagName.toLowerCase()==="select"){return"mousedown"
}return"click"
};
FastClick.prototype.focus=function(a){var b;
if(deviceIsIOS&&a.setSelectionRange&&a.type.indexOf("date")!==0&&a.type!=="time"){b=a.value.length;
a.setSelectionRange(b,b)
}else{a.focus()
}};
FastClick.prototype.updateScrollParent=function(b){var c,a;
c=b.fastClickScrollParent;
if(!c||!c.contains(b)){a=b;
do{if(a.scrollHeight>a.offsetHeight){c=a;
b.fastClickScrollParent=a;
break
}a=a.parentElement
}while(a)
}if(c){c.fastClickLastScrollTop=c.scrollTop
}};
FastClick.prototype.getTargetElementFromEventTarget=function(a){if(a.nodeType===Node.TEXT_NODE){return a.parentNode
}return a
};
FastClick.prototype.onTouchStart=function(c){var a,d,b;
if(c.targetTouches.length>1){return true
}a=this.getTargetElementFromEventTarget(c.target);
d=c.targetTouches[0];
if(deviceIsIOS){b=window.getSelection();
if(b.rangeCount&&!b.isCollapsed){return true
}if(!deviceIsIOS4){if(d.identifier&&d.identifier===this.lastTouchIdentifier){c.preventDefault();
return false
}this.lastTouchIdentifier=d.identifier;
this.updateScrollParent(a)
}}this.trackingClick=true;
this.trackingClickStart=c.timeStamp;
this.targetElement=a;
this.touchStartX=d.pageX;
this.touchStartY=d.pageY;
if((c.timeStamp-this.lastClickTime)<this.tapDelay){c.preventDefault()
}return true
};
FastClick.prototype.touchHasMoved=function(a){var c=a.changedTouches[0],b=this.touchBoundary;
if(Math.abs(c.pageX-this.touchStartX)>b||Math.abs(c.pageY-this.touchStartY)>b){return true
}return false
};
FastClick.prototype.onTouchMove=function(a){if(!this.trackingClick){return true
}if(this.targetElement!==this.getTargetElementFromEventTarget(a.target)||this.touchHasMoved(a)){this.trackingClick=false;
this.targetElement=null
}return true
};
FastClick.prototype.findControl=function(a){if(a.control!==undefined){return a.control
}if(a.htmlFor){return document.getElementById(a.htmlFor)
}return a.querySelector("button, input:not([type=hidden]), keygen, meter, output, progress, select, textarea")
};
FastClick.prototype.onTouchEnd=function(c){var e,d,b,g,f,a=this.targetElement;
if(!this.trackingClick){return true
}if((c.timeStamp-this.lastClickTime)<this.tapDelay){this.cancelNextClick=true;
return true
}this.cancelNextClick=false;
this.lastClickTime=c.timeStamp;
d=this.trackingClickStart;
this.trackingClick=false;
this.trackingClickStart=0;
if(deviceIsIOSWithBadTarget){f=c.changedTouches[0];
a=document.elementFromPoint(f.pageX-window.pageXOffset,f.pageY-window.pageYOffset)||a;
a.fastClickScrollParent=this.targetElement.fastClickScrollParent
}b=a.tagName.toLowerCase();
if(b==="label"){e=this.findControl(a);
if(e){this.focus(a);
if(deviceIsAndroid){return false
}a=e
}}else{if(this.needsFocus(a)){if((c.timeStamp-d)>100||(deviceIsIOS&&window.top!==window&&b==="input")){this.targetElement=null;
return false
}this.focus(a);
this.sendClick(a,c);
if(!deviceIsIOS||b!=="select"){this.targetElement=null;
c.preventDefault()
}return false
}}if(deviceIsIOS&&!deviceIsIOS4){g=a.fastClickScrollParent;
if(g&&g.fastClickLastScrollTop!==g.scrollTop){return true
}}if(!this.needsClick(a)){c.preventDefault();
this.sendClick(a,c)
}return false
};
FastClick.prototype.onTouchCancel=function(){this.trackingClick=false;
this.targetElement=null
};
FastClick.prototype.onMouse=function(a){if(!this.targetElement){return true
}if(a.forwardedTouchEvent){return true
}if(!a.cancelable){return true
}if(!this.needsClick(this.targetElement)||this.cancelNextClick){if(a.stopImmediatePropagation){a.stopImmediatePropagation()
}else{a.propagationStopped=true
}a.stopPropagation();
a.preventDefault();
return false
}return true
};
FastClick.prototype.onClick=function(a){var b;
if(this.trackingClick){this.targetElement=null;
this.trackingClick=false;
return true
}if(a.target.type==="submit"&&a.detail===0){return true
}b=this.onMouse(a);
if(!b){this.targetElement=null
}return b
};
FastClick.prototype.destroy=function(){var a=this.layer;
if(deviceIsAndroid){a.removeEventListener("mouseover",this.onMouse,true);
a.removeEventListener("mousedown",this.onMouse,true);
a.removeEventListener("mouseup",this.onMouse,true)
}a.removeEventListener("click",this.onClick,true);
a.removeEventListener("touchstart",this.onTouchStart,false);
a.removeEventListener("touchmove",this.onTouchMove,false);
a.removeEventListener("touchend",this.onTouchEnd,false);
a.removeEventListener("touchcancel",this.onTouchCancel,false)
};
FastClick.notNeeded=function(b){var a;
var d;
var c;
if(typeof window.ontouchstart==="undefined"){return true
}d=+(/Chrome\/([0-9]+)/.exec(navigator.userAgent)||[,0])[1];
if(d){if(deviceIsAndroid){a=document.querySelector("meta[name=viewport]");
if(a){if(a.content.indexOf("user-scalable=no")!==-1){return true
}if(d>31&&document.documentElement.scrollWidth<=window.outerWidth){return true
}}}else{return true
}}if(deviceIsBlackBerry10){c=navigator.userAgent.match(/Version\/([0-9]*)\.([0-9]*)/);
if(c[1]>=10&&c[2]>=3){a=document.querySelector("meta[name=viewport]");
if(a){if(a.content.indexOf("user-scalable=no")!==-1){return true
}if(document.documentElement.scrollWidth<=window.outerWidth){return true
}}}}if(b.style.msTouchAction==="none"){return true
}return false
};
FastClick.attach=function(b,a){return new FastClick(b,a)
};
if(typeof define=="function"&&typeof define.amd=="object"&&define.amd){define(function(){return FastClick
})
}else{if(typeof module!=="undefined"&&module.exports){module.exports=FastClick.attach;
module.exports.FastClick=FastClick
}else{window.FastClick=FastClick
}}!function(){window.Airbnb=window.Airbnb||{};
window.Airbnb.isO20=false
}();