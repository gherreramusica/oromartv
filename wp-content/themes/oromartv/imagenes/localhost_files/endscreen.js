(function(g){var window=this;'use strict';var mqb=function(a,b){a.jb("onAutonavCoundownStarted",b)},e6=function(a,b,c){g.Ou(a.element,"ytp-suggestion-set",!!b.videoId);
var d=b.playlistId;c=b.Rg(c?c:"mqdefault.jpg");var e=null,f=null;b instanceof g.NS&&(b.lengthText?(e=b.lengthText||null,f=b.qw||null):b.lengthSeconds&&(e=g.PG(b.lengthSeconds),f=g.PG(b.lengthSeconds,!0)));var h=!!d;d=h&&"RD"===g.LQa(d).type;var l=b instanceof g.NS?b.isLivePlayback:null,m=b instanceof g.NS?b.isUpcoming:null,n=b.author,p=b.shortViewCount,q=b.publishedTimeText,r=[],t=[];n&&r.push(n);p&&(r.push(p),t.push(p));q&&t.push(q);c={title:b.title,author:n,author_and_views:r.join(" \u2022 "),aria_label:b.ariaLabel||
g.cK("Watch $TITLE",{TITLE:b.title}),duration:e,timestamp:f,url:b.Zk(),is_live:l,is_upcoming:m,is_list:h,is_mix:d,background:c?"background-image: url("+c+")":"",views_and_publish_time:t.join(" \u2022 "),autoplayAlternativeHeader:b.As};b instanceof g.MS&&(c.playlist_length=b.playlistLength);a.update(c)},f6=function(a){var b=a.U(),c=b.D;
g.U.call(this,{I:"a",S:"ytp-autonav-suggestion-card",W:{href:"{{url}}",target:c?b.Y:"","aria-label":"{{aria_label}}","data-is-live":"{{is_live}}","data-is-list":"{{is_list}}","data-is-mix":"{{is_mix}}","data-is-upcoming":"{{is_upcoming}}"},V:[{I:"div",Ma:["ytp-autonav-endscreen-upnext-thumbnail","ytp-autonav-thumbnail-small"],W:{style:"{{background}}"},V:[{I:"div",W:{"aria-label":"{{timestamp}}"},Ma:["ytp-autonav-timestamp"],ya:"{{duration}}"},{I:"div",Ma:["ytp-autonav-live-stamp"],ya:"Live"},{I:"div",
Ma:["ytp-autonav-upcoming-stamp"],ya:"Upcoming"},{I:"div",S:"ytp-autonav-list-overlay",V:[{I:"div",S:"ytp-autonav-mix-text",ya:"Mix"},{I:"div",S:"ytp-autonav-mix-icon"}]}]},{I:"div",Ma:["ytp-autonav-endscreen-upnext-title","ytp-autonav-title-card"],ya:"{{title}}"},{I:"div",Ma:["ytp-autonav-endscreen-upnext-author","ytp-autonav-author-card"],ya:"{{author}}"},{I:"div",Ma:["ytp-autonav-endscreen-upnext-author","ytp-autonav-view-and-date-card"],ya:"{{views_and_publish_time}}"}]});this.J=a;this.suggestion=
null;this.j=c;this.Ra("click",this.onClick);this.Ra("keypress",this.onKeyPress)},g6=function(a,b){b=void 0===b?!1:b;
g.U.call(this,{I:"div",S:"ytp-autonav-endscreen-countdown-overlay"});var c=this;this.N=b;this.G=this.K=void 0;this.C=0;this.container=new g.U({I:"div",S:"ytp-autonav-endscreen-countdown-container"});g.J(this,this.container);this.container.Da(this.element);b=a.U();var d=b.D;this.J=a;this.suggestion=null;this.onVideoDataChange("newdata",this.J.getVideoData());this.T(a,"videodatachange",this.onVideoDataChange);this.j=new g.U({I:"div",S:"ytp-autonav-endscreen-upnext-container",W:{"aria-label":"{{aria_label}}",
"data-is-live":"{{is_live}}","data-is-list":"{{is_list}}","data-is-mix":"{{is_mix}}","data-is-upcoming":"{{is_upcoming}}"},V:[{I:"div",S:"ytp-autonav-endscreen-upnext-header"},{I:"div",S:"ytp-autonav-endscreen-upnext-alternative-header",ya:"{{autoplayAlternativeHeader}}"},{I:"a",S:"ytp-autonav-endscreen-link-container",W:{href:"{{url}}",target:d?b.Y:""},V:[{I:"div",S:"ytp-autonav-endscreen-upnext-thumbnail",W:{style:"{{background}}"},V:[{I:"div",W:{"aria-label":"{{timestamp}}"},Ma:["ytp-autonav-timestamp"],
ya:"{{duration}}"},{I:"div",Ma:["ytp-autonav-live-stamp"],ya:"Live"},{I:"div",Ma:["ytp-autonav-upcoming-stamp"],ya:"Upcoming"}]},{I:"div",S:"ytp-autonav-endscreen-video-info",V:[{I:"div",S:"ytp-autonav-endscreen-premium-badge"},{I:"div",S:"ytp-autonav-endscreen-upnext-title",ya:"{{title}}"},{I:"div",S:"ytp-autonav-endscreen-upnext-author",ya:"{{author}}"},{I:"div",S:"ytp-autonav-view-and-date",ya:"{{views_and_publish_time}}"},{I:"div",S:"ytp-autonav-author-and-view",ya:"{{author_and_views}}"}]}]}]});
g.J(this,this.j);this.j.Da(this.container.element);d||this.T(this.j.Fa("ytp-autonav-endscreen-link-container"),"click",this.PS);this.J.createClientVe(this.container.element,this,115127);this.J.createClientVe(this.j.Fa("ytp-autonav-endscreen-link-container"),this,115128);this.overlay=new g.U({I:"div",S:"ytp-autonav-overlay"});g.J(this,this.overlay);this.overlay.Da(this.container.element);this.B=new g.U({I:"div",S:"ytp-autonav-endscreen-button-container"});g.J(this,this.B);this.B.Da(this.container.element);
this.cancelButton=new g.U({I:"button",Ma:["ytp-autonav-endscreen-upnext-button","ytp-autonav-endscreen-upnext-cancel-button",b.L("web_modern_buttons")?"ytp-autonav-endscreen-upnext-button-rounded":""],W:{"aria-label":"Cancel autoplay"},ya:"Cancel"});g.J(this,this.cancelButton);this.cancelButton.Da(this.B.element);this.cancelButton.Ra("click",this.Q1,this);this.J.createClientVe(this.cancelButton.element,this,115129);this.playButton=new g.U({I:"a",Ma:["ytp-autonav-endscreen-upnext-button","ytp-autonav-endscreen-upnext-play-button",
b.L("web_modern_buttons")?"ytp-autonav-endscreen-upnext-button-rounded":""],W:{href:"{{url}}",role:"button","aria-label":"Play next video"},ya:"Play Now"});g.J(this,this.playButton);this.playButton.Da(this.B.element);this.playButton.Ra("click",this.PS,this);this.J.L("web_player_autonav_next_button_renderer")?(this.J.createServerVe(this.playButton.element,this.playButton,!0),(b=this.J.getVideoData())&&nqb(this,b)):this.J.createClientVe(this.playButton.element,this,115130);this.D=new g.Cu(function(){oqb(c)},
500);
g.J(this,this.D);this.OS();this.T(a,"autonavvisibility",this.OS);this.J.L("web_autonav_color_transition")&&(this.T(a,"autonavchange",this.P1),this.T(a,"onAutonavCoundownStarted",this.M8))},h6=function(a){var b=a.J.Yk(!0,a.J.isFullscreen());
g.Ou(a.container.element,"ytp-autonav-endscreen-small-mode",a.Kf(b));g.Ou(a.container.element,"ytp-autonav-endscreen-is-premium",!!a.suggestion&&!!a.suggestion.GK);g.Ou(a.J.getRootNode(),"ytp-autonav-endscreen-cancelled-state",!a.J.xf());g.Ou(a.J.getRootNode(),"countdown-running",a.il());g.Ou(a.container.element,"ytp-player-content",a.J.xf());g.Wr(a.overlay.element,{width:b.width+"px"});if(!a.il()){a.J.xf()?pqb(a,Math.round(qqb(a)/1E3)):pqb(a);b=!!a.suggestion&&!!a.suggestion.As;var c=a.J.xf()||!b;
g.Ou(a.container.element,"ytp-autonav-endscreen-upnext-alternative-header-only",!c&&b);g.Ou(a.container.element,"ytp-autonav-endscreen-upnext-no-alternative-header",c&&!b);g.WF(a.B,a.J.xf());g.Ou(a.element,"ytp-enable-w2w-color-transitions",rqb(a))}},oqb=function(a){var b=qqb(a),c=Math,d=c.min;
var e=a.C?Date.now()-a.C:0;c=d.call(c,e,b);pqb(a,Math.ceil((b-c)/1E3));500>=b-c&&a.il()?a.select(!0):a.il()&&a.D.start()},qqb=function(a){if(a.J.isFullscreen()){var b;
a=null==(b=a.J.getVideoData())?void 0:b.TB;return-1===a||void 0===a?8E3:a}return 0<=a.J.Ts()?a.J.Ts():g.qJ(a.J.U().experiments,"autoplay_time")||1E4},nqb=function(a,b){a.J.L("web_player_autonav_next_button_renderer");
b=b.w5;a.K=null==b?void 0:b.navigationEndpoint;b=null==b?void 0:b.trackingParams;a.playButton&&b&&a.J.setTrackingParams(a.playButton.element,b)},rqb=function(a){var b;
return!(null==(b=a.J.getVideoData())||!b.watchToWatchTransitionRenderer)},pqb=function(a,b){b=void 0===b?-1:b;
a=a.j.Fa("ytp-autonav-endscreen-upnext-header");g.lf(a);if(0<=b){b=String(b);var c="Up next in $SECONDS".match(RegExp("\\$SECONDS","gi"))[0],d="Up next in $SECONDS".indexOf(c);if(0<=d){a.appendChild(g.af("Up next in $SECONDS".slice(0,d)));var e=g.$e("span");g.Iu(e,"ytp-autonav-endscreen-upnext-header-countdown-number");g.qf(e,b);a.appendChild(e);a.appendChild(g.af("Up next in $SECONDS".slice(d+c.length)));return}}g.qf(a,"Up next")},i6=function(a,b){g.U.call(this,{I:"div",
Ma:["html5-endscreen","ytp-player-content",b||"base-endscreen"]});this.created=!1;this.player=a},j6=function(a){g.U.call(this,{I:"div",
Ma:["ytp-upnext","ytp-player-content"],W:{"aria-label":"{{aria_label}}"},V:[{I:"div",S:"ytp-cued-thumbnail-overlay-image",W:{style:"{{background}}"}},{I:"span",S:"ytp-upnext-top",V:[{I:"span",S:"ytp-upnext-header",ya:"Up Next"},{I:"span",S:"ytp-upnext-title",ya:"{{title}}"},{I:"span",S:"ytp-upnext-author",ya:"{{author}}"}]},{I:"a",S:"ytp-upnext-autoplay-icon",W:{role:"button",href:"{{url}}","aria-label":"Play next video"},V:[{I:"svg",W:{height:"100%",version:"1.1",viewBox:"0 0 72 72",width:"100%"},
V:[{I:"circle",S:"ytp-svg-autoplay-circle",W:{cx:"36",cy:"36",fill:"#fff","fill-opacity":"0.3",r:"31.5"}},{I:"circle",S:"ytp-svg-autoplay-ring",W:{cx:"-36",cy:"36","fill-opacity":"0",r:"33.5",stroke:"#FFFFFF","stroke-dasharray":"211","stroke-dashoffset":"-211","stroke-width":"4",transform:"rotate(-90)"}},{I:"path",S:"ytp-svg-fill",W:{d:"M 24,48 41,36 24,24 V 48 z M 44,24 v 24 h 4 V 24 h -4 z"}}]}]},{I:"span",S:"ytp-upnext-bottom",V:[{I:"span",S:"ytp-upnext-cancel"},{I:"span",S:"ytp-upnext-paused",
ya:"Autoplay is paused"}]}]});this.api=a;this.cancelButton=null;this.G=this.Fa("ytp-svg-autoplay-ring");this.C=this.notification=this.j=this.suggestion=null;this.D=new g.Cu(this.eH,5E3,this);this.B=0;var b=this.Fa("ytp-upnext-cancel");this.cancelButton=new g.U({I:"button",Ma:["ytp-upnext-cancel-button","ytp-button"],W:{tabindex:"0","aria-label":"Cancel autoplay"},ya:"Cancel"});g.J(this,this.cancelButton);this.cancelButton.Ra("click",this.R1,this);this.cancelButton.Da(b);this.cancelButton&&this.api.createClientVe(this.cancelButton.element,
this,115129);g.J(this,this.D);this.api.createClientVe(this.element,this,18788);b=this.Fa("ytp-upnext-autoplay-icon");this.T(b,"click",this.S1);this.api.createClientVe(b,this,115130);this.QS();this.T(a,"autonavvisibility",this.QS);this.T(a,"mdxnowautoplaying",this.y9);this.T(a,"mdxautoplaycanceled",this.z9);g.Ou(this.element,"ytp-upnext-mobile",this.api.U().B)},sqb=function(a,b){if(b)return b;
if(a.api.isFullscreen()){var c;a=null==(c=a.api.getVideoData())?void 0:c.TB;return-1===a||void 0===a?8E3:a}return 0<=a.api.Ts()?a.api.Ts():g.qJ(a.api.U().experiments,"autoplay_time")||1E4},tqb=function(a,b){b=sqb(a,b);
var c=Math,d=c.min;var e=(0,g.rD)()-a.B;c=d.call(c,e,b);b=0===b?1:Math.min(c/b,1);a.G.setAttribute("stroke-dashoffset",""+-211*(b+1));1<=b&&a.il()&&3!==a.api.getPresentingPlayerType()?a.select(!0):a.il()&&a.j.start()},k6=function(a){i6.call(this,a,"autonav-endscreen");
this.overlay=this.videoData=null;this.table=new g.U({I:"div",S:"ytp-suggestion-panel",V:[{I:"div",Ma:["ytp-autonav-endscreen-upnext-header","ytp-autonav-endscreen-more-videos"],ya:"More videos"}]});this.N=new g.U({I:"div",S:"ytp-suggestions-container"});this.videos=[];this.C=null;this.G=this.K=!1;this.B=new g6(this.player);g.J(this,this.B);this.B.Da(this.element);a.getVideoData().Qf?this.j=this.B:(this.j=new j6(a),g.uU(this.player,this.j.element,4),g.J(this,this.j));this.overlay=new g.U({I:"div",
S:"ytp-autonav-overlay-cancelled-state"});g.J(this,this.overlay);this.overlay.Da(this.element);this.D=new g.MK(this);g.J(this,this.D);g.J(this,this.table);this.table.Da(this.element);this.table.show();g.J(this,this.N);this.N.Da(this.table.element);this.hide()},l6=function(a){var b=a.xf();
b!==a.G&&(a.G=b,a.player.oa("autonavvisibility"),a.G?(a.B!==a.j&&a.B.hide(),a.table.hide()):(a.B!==a.j&&a.B.show(),a.table.show()))},m6=function(a,b){g.U.call(this,{I:"button",
Ma:["ytp-watch-on-youtube-button","ytp-button"],ya:"{{content}}"});this.J=a;this.buttonType=this.buttonType=b;this.s_();2===this.buttonType&&g.Ku(this.element,"ytp-continue-watching-button");this.Ra("click",this.onClick);this.Ra("videodatachange",this.s_);g.WF(this,!0)},n6=function(a,b){i6.call(this,a,"embeds-lite-endscreen");
this.J=a;this.pd=b;this.J.createClientVe(this.element,this,156943);this.watchButton=new m6(a,2);g.J(this,this.watchButton);this.watchButton.Da(this.element);this.hide()},uqb=function(a){i6.call(this,a,"subscribecard-endscreen");
this.j=new g.U({I:"div",S:"ytp-subscribe-card",V:[{I:"img",S:"ytp-author-image",W:{src:"{{profilePicture}}"}},{I:"div",S:"ytp-subscribe-card-right",V:[{I:"div",S:"ytp-author-name",ya:"{{author}}"},{I:"div",S:"html5-subscribe-button-container"}]}]});g.J(this,this.j);this.j.Da(this.element);var b=a.getVideoData();this.subscribeButton=new g.nW("Subscribe",null,"Unsubscribe",null,!0,!1,b.Jl,b.subscribed,"trailer-endscreen",null,a,!1);g.J(this,this.subscribeButton);this.subscribeButton.Da(this.j.Fa("html5-subscribe-button-container"));
this.T(a,"videodatachange",this.Sa);this.Sa();this.hide()},o6=function(a){var b=a.U(),c=g.JK||g.YR?{style:"will-change: opacity"}:void 0,d=b.D,e=["ytp-videowall-still"];
b.B&&e.push("ytp-videowall-show-text");g.U.call(this,{I:"a",Ma:e,W:{href:"{{url}}",target:d?b.Y:"","aria-label":"{{aria_label}}","data-is-live":"{{is_live}}","data-is-list":"{{is_list}}","data-is-mix":"{{is_mix}}"},V:[{I:"div",S:"ytp-videowall-still-image",W:{style:"{{background}}"}},{I:"span",S:"ytp-videowall-still-info",W:{"aria-hidden":"true"},V:[{I:"span",S:"ytp-videowall-still-info-bg",V:[{I:"span",S:"ytp-videowall-still-info-content",W:c,V:[{I:"span",S:"ytp-videowall-still-info-title",ya:"{{title}}"},
{I:"span",S:"ytp-videowall-still-info-author",ya:"{{author_and_views}}"},{I:"span",S:"ytp-videowall-still-info-live",ya:"Live"},{I:"span",S:"ytp-videowall-still-info-duration",ya:"{{duration}}"}]}]}]},{I:"span",Ma:["ytp-videowall-still-listlabel-regular","ytp-videowall-still-listlabel"],W:{"aria-hidden":"true"},V:[{I:"span",S:"ytp-videowall-still-listlabel-icon"},"Playlist",{I:"span",S:"ytp-videowall-still-listlabel-length",V:[" (",{I:"span",ya:"{{playlist_length}}"},")"]}]},{I:"span",Ma:["ytp-videowall-still-listlabel-mix",
"ytp-videowall-still-listlabel"],W:{"aria-hidden":"true"},V:[{I:"span",S:"ytp-videowall-still-listlabel-mix-icon"},"Mix",{I:"span",S:"ytp-videowall-still-listlabel-length",ya:" (50+)"}]}]});this.suggestion=null;this.B=d;this.api=a;this.j=new g.MK(this);g.J(this,this.j);this.Ra("click",this.onClick);this.Ra("keypress",this.onKeyPress);this.j.T(a,"videodatachange",this.onVideoDataChange);a.createServerVe(this.element,this);this.onVideoDataChange()},p6=function(a){i6.call(this,a,"videowall-endscreen");
var b=this;this.J=a;this.C=0;this.stills=[];this.D=this.videoData=null;this.G=this.N=!1;this.Y=null;this.B=new g.MK(this);g.J(this,this.B);this.K=new g.Cu(function(){g.Ku(b.element,"ytp-show-tiles")},0);
g.J(this,this.K);var c=new g.U({I:"button",Ma:["ytp-button","ytp-endscreen-previous"],W:{"aria-label":"Previous"},V:[g.bG()]});g.J(this,c);c.Da(this.element);c.Ra("click",this.W1,this);this.table=new g.TF({I:"div",S:"ytp-endscreen-content"});g.J(this,this.table);this.table.Da(this.element);c=new g.U({I:"button",Ma:["ytp-button","ytp-endscreen-next"],W:{"aria-label":"Next"},V:[g.cG()]});g.J(this,c);c.Da(this.element);c.Ra("click",this.V1,this);a.getVideoData().Qf?this.j=new g6(a,!0):this.j=new j6(a);
g.J(this,this.j);g.uU(this.player,this.j.element,4);a.createClientVe(this.element,this,158789);this.hide()},q6=function(a){return g.vU(a.player)&&a.OC()&&!a.D},r6=function(a){var b=a.xf();
b!==a.N&&(a.N=b,a.player.oa("autonavvisibility"))},s6=function(a){i6.call(this,a,"watch-again-on-youtube-endscreen");
this.watchButton=new m6(a,1);g.J(this,this.watchButton);this.watchButton.Da(this.element);g.Leb(a)&&(this.j=new g.u2(a),g.J(this,this.j),this.B=new g.U({I:"div",Ma:["ytp-watch-again-on-youtube-endscreen-more-videos-container"],W:{tabIndex:"-1"},V:[this.j]}),g.J(this,this.B),this.j.Da(this.B.element),this.B.Da(this.element));a.createClientVe(this.element,this,156914);this.hide()},yqb=function(a){g.FV.call(this,a);
var b=this;this.endScreen=null;this.B=this.j=this.C=this.D=!1;this.listeners=new g.MK(this);g.J(this,this.listeners);var c=a.U(),d=a.getVideoData();d=d&&0!==d.limitedPlaybackDurationInSeconds;g.rC(g.hS(c))&&d&&!g.qU(a)?(this.B=!0,this.endScreen=new n6(a,g.hU(a))):g.rU(a)?this.endScreen=new s6(a):vqb(a)?(this.D=!0,wqb(this),this.j?this.endScreen=new k6(a):this.endScreen=new p6(a)):c.nh?this.endScreen=new uqb(a):this.endScreen=new i6(a);g.J(this,this.endScreen);g.uU(a,this.endScreen.element,4);xqb(this);
this.listeners.T(a,"videodatachange",this.onVideoDataChange,this);this.listeners.T(a,g.XJ("endscreen"),function(e){b.onCueRangeEnter(e)});
this.listeners.T(a,g.YJ("endscreen"),function(e){b.onCueRangeExit(e)})},wqb=function(a){var b=a.player.getVideoData();
if(!b||a.j===b.Ll&&a.C===b.Qf)return!1;a.j=b.Ll;a.C=b.Qf;return!0},vqb=function(a){a=a.U();
return a.Ed&&!a.nh},xqb=function(a){a.player.lf("endscreen");
var b=a.player.getVideoData();b=new g.WJ(Math.max(1E3*(b.lengthSeconds-10),0),0x8000000000000,{id:"preload",namespace:"endscreen"});var c=new g.WJ(0x8000000000000,0x8000000000000,{id:"load",priority:8,namespace:"endscreen"});a.player.tf([b,c])};
g.mU.prototype.Ts=g.ca(16,function(){return this.app.Ts()});
g.T0.prototype.Ts=g.ca(15,function(){return this.getVideoData().yU});
g.iU.prototype.Em=g.ca(14,function(a){this.ph().Em(a)});
g.OW.prototype.Em=g.ca(13,function(a){this.j!==a&&(this.j=a,this.Sa())});
g.$X.prototype.Em=g.ca(12,function(a){this.overflowButton&&this.overflowButton.Em(a)});
g.iU.prototype.Fm=g.ca(11,function(a){this.ph().Fm(a)});
g.TW.prototype.Fm=g.ca(10,function(a){this.j!==a&&(this.j=a,this.Sa())});
g.$X.prototype.Fm=g.ca(9,function(a){this.shareButton&&this.shareButton.Fm(a)});
g.iU.prototype.ou=g.ca(8,function(a){this.ph().ou(a)});
g.fW.prototype.ou=g.ca(7,function(a){this.xQ!==a&&(this.xQ=a,this.rq())});
g.iU.prototype.Nr=g.ca(6,function(a){this.ph().Nr(a)});
g.$X.prototype.Nr=g.ca(5,function(a){this.wQ!==a&&(this.wQ=a,this.Ik())});g.w(f6,g.U);f6.prototype.select=function(){this.J.Ko(this.suggestion.videoId,this.suggestion.sessionData,this.suggestion.playlistId,void 0,void 0,this.suggestion.gD||void 0)&&this.J.logClick(this.element)};
f6.prototype.onClick=function(a){g.NU(a,this.J,this.j,this.suggestion.sessionData||void 0)&&this.select()};
f6.prototype.onKeyPress=function(a){switch(a.keyCode){case 13:case 32:a.defaultPrevented||(this.select(),a.preventDefault())}};g.w(g6,g.U);g.k=g6.prototype;g.k.nG=function(a){this.suggestion!==a&&(this.suggestion=a,e6(this.j,a),this.playButton.updateValue("url",this.suggestion.Zk()),h6(this))};
g.k.il=function(){return 0<this.C};
g.k.AB=function(){this.il()||(this.C=Date.now(),oqb(this),mqb(this.J,qqb(this)),g.Ou(this.J.getRootNode(),"countdown-running",this.il()))};
g.k.Sw=function(){this.jq();oqb(this);var a=this.j.Fa("ytp-autonav-endscreen-upnext-header");a&&g.qf(a,"Up next")};
g.k.jq=function(){this.il()&&(this.D.stop(),this.C=0)};
g.k.select=function(a){this.J.nextVideo(!1,void 0===a?!1:a);this.jq()};
g.k.PS=function(a){g.NU(a,this.J)&&(a.currentTarget===this.playButton.element?this.J.logClick(this.playButton.element):a.currentTarget===this.j.Fa("ytp-autonav-endscreen-link-container")&&(a=this.j.Fa("ytp-autonav-endscreen-link-container"),this.J.logVisibility(a,!0),this.J.logClick(a)),this.J.L("web_player_autonav_next_button_renderer")&&this.K?(this.J.jb("innertubeCommand",this.K),this.jq()):this.select())};
g.k.Q1=function(){this.J.logClick(this.cancelButton.element);g.oU(this.J,!0);this.G&&this.J.jb("innertubeCommand",this.G)};
g.k.onVideoDataChange=function(a,b){this.J.L("web_player_autonav_next_button_renderer")&&nqb(this,b);var c;this.G=null==(c=b.U4)?void 0:c.command};
g.k.M8=function(a){if(rqb(this)){var b=this.J.getVideoData().watchToWatchTransitionRenderer,c=null==b?void 0:b.fromColorPaletteDark;b=null==b?void 0:b.toColorPaletteDark;if(c&&b){var d=this.element;d.style.setProperty("--w2w-start-background-color",g.XG(c.surgeColor));d.style.setProperty("--w2w-start-primary-text-color",g.XG(c.primaryTitleColor));d.style.setProperty("--w2w-start-secondary-text-color",g.XG(c.secondaryTitleColor));d.style.setProperty("--w2w-end-background-color",g.XG(b.surgeColor));
d.style.setProperty("--w2w-end-primary-text-color",g.XG(b.primaryTitleColor));d.style.setProperty("--w2w-end-secondary-text-color",g.XG(b.secondaryTitleColor));d.style.setProperty("--w2w-animation-duration",a+"ms")}g.Ou(this.element,"ytp-w2w-animate",!0)}};
g.k.P1=function(a){this.J.L("web_autonav_color_transition")&&2!==a&&g.Ou(this.element,"ytp-w2w-animate",!1)};
g.k.OS=function(){var a=this.J.xf();this.N&&this.Eb!==a&&g.WF(this,a);h6(this);this.J.logVisibility(this.container.element,a);this.J.logVisibility(this.cancelButton.element,a);this.J.logVisibility(this.j.Fa("ytp-autonav-endscreen-link-container"),a);this.J.logVisibility(this.playButton.element,a)};
g.k.Kf=function(a){return 400>a.width||459>a.height};g.w(i6,g.U);g.k=i6.prototype;g.k.create=function(){this.created=!0};
g.k.destroy=function(){this.created=!1};
g.k.OC=function(){return!1};
g.k.xf=function(){return!1};
g.k.CX=function(){return!1};g.w(j6,g.U);g.k=j6.prototype;g.k.eH=function(){this.notification&&(this.D.stop(),this.Lc(this.C),this.C=null,this.notification.close(),this.notification=null)};
g.k.nG=function(a){this.suggestion=a;e6(this,a,"hqdefault.jpg")};
g.k.QS=function(){g.WF(this,this.api.xf());this.api.logVisibility(this.element,this.api.xf());this.api.logVisibility(this.Fa("ytp-upnext-autoplay-icon"),this.api.xf());this.cancelButton&&this.api.logVisibility(this.cancelButton.element,this.api.xf())};
g.k.H9=function(){window.focus();this.eH()};
g.k.AB=function(a){var b=this;this.il()||(g.AE("a11y-announce","Up Next "+this.suggestion.title),this.B=(0,g.rD)(),this.j=new g.Cu(function(){tqb(b,a)},25),tqb(this,a),mqb(this.api,sqb(this,a)));
g.Mu(this.element,"ytp-upnext-autoplay-paused")};
g.k.hide=function(){g.U.prototype.hide.call(this)};
g.k.il=function(){return!!this.j};
g.k.Sw=function(){this.jq();this.B=(0,g.rD)();tqb(this);g.Ku(this.element,"ytp-upnext-autoplay-paused")};
g.k.jq=function(){this.il()&&(this.j.dispose(),this.j=null)};
g.k.select=function(a){a=void 0===a?!1:a;if(this.api.U().L("autonav_notifications")&&a&&window.Notification&&"function"===typeof document.hasFocus){var b=Notification.permission;"default"===b?Notification.requestPermission():"granted"!==b||document.hasFocus()||(this.eH(),this.notification=new Notification("Up Next",{body:this.suggestion.title,icon:this.suggestion.Rg()}),this.C=this.T(this.notification,"click",this.H9),this.D.start())}this.jq();this.api.nextVideo(!1,a)};
g.k.S1=function(a){!g.pf(this.cancelButton.element,a.target)&&g.NU(a,this.api)&&(this.api.xf()&&this.api.logClick(this.Fa("ytp-upnext-autoplay-icon")),this.select())};
g.k.R1=function(){this.api.xf()&&this.cancelButton&&this.api.logClick(this.cancelButton.element);g.oU(this.api,!0)};
g.k.y9=function(a){this.api.getPresentingPlayerType();this.show();this.AB(a)};
g.k.z9=function(){this.api.getPresentingPlayerType();this.jq();this.hide()};
g.k.xa=function(){this.jq();this.eH();g.U.prototype.xa.call(this)};g.w(k6,i6);g.k=k6.prototype;g.k.create=function(){i6.prototype.create.call(this);this.D.T(this.player,"appresize",this.bC);this.D.T(this.player,"onVideoAreaChange",this.bC);this.D.T(this.player,"videodatachange",this.onVideoDataChange);this.D.T(this.player,"autonavchange",this.RS);this.D.T(this.player,"onAutonavCancelled",this.T1);this.onVideoDataChange()};
g.k.show=function(){i6.prototype.show.call(this);(this.K||this.C&&this.C!==this.videoData.clientPlaybackNonce)&&g.oU(this.player,!1);g.vU(this.player)&&this.OC()&&!this.C?(l6(this),2===this.videoData.autonavState?3===this.player.getVisibilityState()?this.j.select(!0):this.j.AB():3===this.videoData.autonavState&&this.j.Sw()):(g.oU(this.player,!0),l6(this));this.bC()};
g.k.hide=function(){i6.prototype.hide.call(this);this.j.Sw();l6(this)};
g.k.bC=function(){var a=this.player.Yk(!0,this.player.isFullscreen());l6(this);h6(this.B);g.Ou(this.element,"ytp-autonav-cancelled-small-mode",this.Kf(a));g.Ou(this.element,"ytp-autonav-cancelled-tiny-mode",this.LI(a));g.Ou(this.element,"ytp-autonav-cancelled-mini-mode",400>=a.width||360>=a.height);this.overlay&&g.Wr(this.overlay.element,{width:a.width+"px"});if(!this.G)for(a=0;a<this.videos.length;a++)g.Ou(this.videos[a].element,"ytp-suggestion-card-with-margin",1===a%2)};
g.k.onVideoDataChange=function(){var a=this.player.getVideoData();if(this.videoData!==a&&a){this.videoData=a;if((a=this.videoData.suggestions)&&a.length||this.player.L("web_player_autonav_empty_suggestions_fix")){var b=g.nT(this.videoData);b&&(this.j.nG(b),this.j!==this.B&&this.B.nG(b))}if(a&&a.length)for(b=0;b<zqb.length;++b){var c=zqb[b];if(a&&a[c]){this.videos[b]=new f6(this.player);var d=this.videos[b];c=a[c];d.suggestion!==c&&(d.suggestion=c,e6(d,c));g.J(this,this.videos[b]);this.videos[b].Da(this.N.element)}}this.bC()}};
g.k.RS=function(a){1===a?(this.K=!1,this.C=this.videoData.clientPlaybackNonce,this.j.jq(),this.Eb&&this.bC()):(this.K=!0,this.xf()&&(2===a?this.j.AB():3===a&&this.j.Sw()))};
g.k.T1=function(a){a?this.RS(1):(this.C=null,this.K=!1)};
g.k.OC=function(){return 1!==this.videoData.autonavState};
g.k.Kf=function(a){return(910>a.width||459>a.height)&&!this.LI(a)&&!(400>=a.width||360>=a.height)};
g.k.LI=function(a){return 800>a.width&&!(400>=a.width||360>=a.height)};
g.k.xf=function(){return this.Eb&&g.vU(this.player)&&this.OC()&&!this.C};
var zqb=[1,3,2,4];g.w(m6,g.U);g.k=m6.prototype;g.k.s_=function(){switch(this.buttonType){case 1:var a="Watch again on YouTube";var b=156915;break;case 2:a="Continue watching on YouTube";b=156942;break;default:a="Continue watching on YouTube",b=156942}this.update({content:a});this.J.hasVe(this.element)&&this.J.destroyVe(this.element);this.J.createClientVe(this.element,this,b)};
g.k.onClick=function(a){this.J.L("web_player_log_click_before_generating_ve_conversion_params")&&this.J.logClick(this.element);g.OU(this.getVideoUrl(),this.J,a);this.J.L("web_player_log_click_before_generating_ve_conversion_params")||this.J.logClick(this.element)};
g.k.getVideoUrl=function(){var a=!0;switch(this.buttonType){case 1:a=!0;break;case 2:a=!1}a=this.J.getVideoUrl(a,!1,!1,!0);var b=this.J.U();if(g.ZR(b)||g.gS(b)){var c={};g.ZR(b)&&g.bU(this.J,"addEmbedsConversionTrackingParams",[c]);a:{switch(this.buttonType){case 2:b="emb_ytp_continue_watching";break a}b="emb_ytp_watch_again"}g.wP(c,b);a=g.Ml(a,c)}return a};
g.k.logVisibility=function(){this.J.logVisibility(this.element,this.Eb&&this.Z)};
g.k.show=function(){g.U.prototype.show.call(this);this.logVisibility()};
g.k.hide=function(){g.U.prototype.hide.call(this);this.logVisibility()};
g.k.ac=function(a){g.U.prototype.ac.call(this,a);this.logVisibility()};g.w(n6,i6);n6.prototype.show=function(){3!==this.player.getPlayerState()&&(i6.prototype.show.call(this),this.pd.Nr(!0),this.pd.Fm(!0),this.J.U().Pe||this.pd.Em(!0),this.J.logVisibility(this.element,!0),this.watchButton.ac(!0))};
n6.prototype.hide=function(){i6.prototype.hide.call(this);this.pd.Nr(!1);this.pd.Fm(!1);this.pd.Em(!1);this.J.logVisibility(this.element,!1);this.watchButton.ac(!1)};g.w(uqb,i6);uqb.prototype.Sa=function(){var a=this.player.getVideoData();this.j.update({profilePicture:a.profilePicture,author:a.author});this.subscribeButton.channelId=a.Jl;var b=this.subscribeButton;a.subscribed?b.j():b.B()};g.w(o6,g.U);o6.prototype.select=function(){this.api.Ko(this.suggestion.videoId,this.suggestion.sessionData,this.suggestion.playlistId,void 0,void 0,this.suggestion.gD||void 0)&&this.api.logClick(this.element)};
o6.prototype.onClick=function(a){if(g.ZR(this.api.U())&&this.api.L("web_player_log_click_before_generating_ve_conversion_params")){this.api.logClick(this.element);var b=this.suggestion.Zk(),c={};g.hTa(this.api,c,"emb_rel_end");b=g.Ml(b,c);g.OU(b,this.api,a)}else g.NU(a,this.api,this.B,this.suggestion.sessionData||void 0)&&this.select()};
o6.prototype.onKeyPress=function(a){switch(a.keyCode){case 13:case 32:a.defaultPrevented||(this.select(),a.preventDefault())}};
o6.prototype.onVideoDataChange=function(){var a=this.api.getVideoData(),b=this.api.U();this.B=a.Jf?!1:b.D};g.w(p6,i6);g.k=p6.prototype;g.k.create=function(){i6.prototype.create.call(this);var a=this.player.getVideoData();a&&(this.videoData=a);this.wq();this.B.T(this.player,"appresize",this.wq);this.B.T(this.player,"onVideoAreaChange",this.wq);this.B.T(this.player,"videodatachange",this.onVideoDataChange);this.B.T(this.player,"autonavchange",this.xL);this.B.T(this.player,"onAutonavCancelled",this.U1);a=this.videoData.autonavState;a!==this.Y&&this.xL(a);this.B.T(this.element,"transitionend",this.X$)};
g.k.destroy=function(){g.GC(this.B);g.ub(this.stills);this.stills=[];i6.prototype.destroy.call(this);g.Mu(this.element,"ytp-show-tiles");this.K.stop();this.Y=this.videoData.autonavState};
g.k.OC=function(){return 1!==this.videoData.autonavState};
g.k.show=function(){var a=this.Eb;i6.prototype.show.call(this);g.Mu(this.element,"ytp-show-tiles");this.player.U().B?g.Eu(this.K):this.K.start();(this.G||this.D&&this.D!==this.videoData.clientPlaybackNonce)&&g.oU(this.player,!1);q6(this)?(r6(this),2===this.videoData.autonavState?3===this.player.getVisibilityState()?this.j.select(!0):this.j.AB():3===this.videoData.autonavState&&this.j.Sw()):(g.oU(this.player,!0),r6(this));a!==this.Eb&&this.player.logVisibility(this.element,!0)};
g.k.hide=function(){var a=this.Eb;i6.prototype.hide.call(this);this.j.Sw();r6(this);a!==this.Eb&&this.player.logVisibility(this.element,!1)};
g.k.X$=function(a){a.target===this.element&&this.wq()};
g.k.wq=function(){var a,b,c,d;var e=(null==(a=this.videoData)?0:null==(b=a.suggestions)?0:b.length)?null==(c=this.videoData)?void 0:c.suggestions:[null==(d=this.videoData)?void 0:g.nT(d)];if(e.length){g.Ku(this.element,"ytp-endscreen-paginate");var f=this.J.Yk(!0,this.J.isFullscreen());if(a=g.hU(this.J))a=a.Wf()?48:32,f.width-=2*a;var h=f.width/f.height;d=96/54;b=a=2;var l=Math.max(f.width/96,2),m=Math.max(f.height/54,2);c=e.length;var n=Math.pow(2,2);var p=c*n+(Math.pow(2,2)-n);p+=Math.pow(2,2)-
n;for(p-=n;0<p&&(a<l||b<m);){var q=a/2,r=b/2,t=a<=l-2&&p>=r*n,v=b<=m-2&&p>=q*n;if((q+1)/r*d/h>h/(q/(r+1)*d)&&v)p-=q*n,b+=2;else if(t)p-=r*n,a+=2;else if(v)p-=q*n,b+=2;else break}d=!1;p>=3*n&&6>=c*n-p&&(4<=b||4<=a)&&(d=!0);n=96*a;p=54*b;h=n/p<h?f.height/p:f.width/n;h=Math.min(h,2);n=Math.floor(Math.min(f.width,n*h));p=Math.floor(Math.min(f.height,p*h));f=this.table.element;f.ariaLive="polite";g.fs(f,n,p);g.Wr(f,{marginLeft:n/-2+"px",marginTop:p/-2+"px"});this.j.nG(g.nT(this.videoData));this.j instanceof
g6&&h6(this.j);g.Ou(this.element,"ytp-endscreen-takeover",q6(this));r6(this);n+=4;p+=4;h=0;f.ariaBusy="true";for(l=0;l<a;l++)for(m=0;m<b;m++)if(q=h,t=0,d&&l>=a-2&&m>=b-2?t=1:0===m%2&&0===l%2&&(2>m&&2>l?0===m&&0===l&&(t=2):t=2),q=g.je(q+this.C,c),0!==t){r=this.stills[h];r||(r=new o6(this.player),this.stills[h]=r,f.appendChild(r.element));v=Math.floor(p*m/b);var x=Math.floor(n*l/a),B=Math.floor(p*(m+t)/b)-v-4,F=Math.floor(n*(l+t)/a)-x-4;g.bs(r.element,x,v);g.fs(r.element,F,B);g.Wr(r.element,"transitionDelay",
(m+l)/20+"s");g.Ou(r.element,"ytp-videowall-still-mini",1===t);g.Ou(r.element,"ytp-videowall-still-large",2<t);t=Math.max(F,B);g.Ou(r.element,"ytp-videowall-still-round-large",256<=t);g.Ou(r.element,"ytp-videowall-still-round-medium",96<t&&256>t);g.Ou(r.element,"ytp-videowall-still-round-small",96>=t);q=e[q];r.suggestion!==q&&(r.suggestion=q,t=r.api.U(),v=g.Ju(r.element,"ytp-videowall-still-large")?"hqdefault.jpg":"mqdefault.jpg",e6(r,q,v),g.ZR(t)&&!r.api.L("web_player_log_click_before_generating_ve_conversion_params")&&
(t=q.Zk(),v={},g.bU(r.api,"addEmbedsConversionTrackingParams",[v]),t=g.Ml(t,g.wP(v,"emb_rel_end")),r.updateValue("url",t)),(q=(q=q.sessionData)&&q.itct)&&r.api.setTrackingParams(r.element,q));h++}f.ariaBusy="false";g.Ou(this.element,"ytp-endscreen-paginate",h<c);for(e=this.stills.length-1;e>=h;e--)a=this.stills[e],g.nf(a.element),g.rb(a);this.stills.length=h}};
g.k.onVideoDataChange=function(){var a=this.player.getVideoData();this.videoData!==a&&(this.C=0,this.videoData=a,this.wq())};
g.k.V1=function(){this.C+=this.stills.length;this.wq()};
g.k.W1=function(){this.C-=this.stills.length;this.wq()};
g.k.CX=function(){return this.j.il()};
g.k.xL=function(a){1===a?(this.G=!1,this.D=this.videoData.clientPlaybackNonce,this.j.jq(),this.Eb&&this.wq()):(this.G=!0,this.Eb&&q6(this)&&(2===a?this.j.AB():3===a&&this.j.Sw()))};
g.k.U1=function(a){if(a){for(a=0;a<this.stills.length;a++)this.J.logVisibility(this.stills[a].element,!0);this.xL(1)}else this.D=null,this.G=!1;this.wq()};
g.k.xf=function(){return this.Eb&&q6(this)};g.w(s6,i6);s6.prototype.UD=function(){var a;return null==(a=this.j)?void 0:a.UD()};
s6.prototype.show=function(){if(3!==this.player.getPlayerState()){i6.prototype.show.call(this);var a=this.B;if(a){var b=this.j.UD();g.Ou(this.element,"ytp-shorts-branded-ui",b);b?a.show():a.hide()}var c;null==(c=g.hU(this.player))||c.ou(!0);this.player.logVisibility(this.element,!0);this.watchButton.ac(!0)}};
s6.prototype.hide=function(){i6.prototype.hide.call(this);var a;null==(a=g.hU(this.player))||a.ou(!1);this.player.logVisibility(this.element,!1);this.watchButton.ac(!1)};g.w(yqb,g.FV);g.k=yqb.prototype;g.k.vu=function(){var a=this.player.getVideoData(),b=a.mutedAutoplay;if((g.rU(this.player)||this.B)&&!b)return!0;var c;var d=!!((null==a?0:g.nT(a))||(null==a?0:null==(c=a.suggestions)?0:c.length));d=!vqb(this.player)||d;a=a.zj||g.gS(a.Ha);c=this.player.tD();return d&&!a&&!c&&!b};
g.k.xf=function(){return this.endScreen.xf()};
g.k.z7=function(){return this.xf()?this.endScreen.CX():!1};
g.k.xa=function(){this.player.lf("endscreen");g.FV.prototype.xa.call(this)};
g.k.load=function(){var a=this.player.getVideoData();var b=a.transitionEndpointAtEndOfStream;if(b&&b.videoId){var c=this.player.zb().me.get("heartbeat"),d=g.nT(a);!d||b.videoId!==d.videoId||a.BS?(this.player.Ko(b.videoId,void 0,void 0,!0,!0,b),c&&c.VI("HEARTBEAT_ACTION_TRIGGER_AT_STREAM_END","HEARTBEAT_ACTION_TRANSITION_REASON_HAS_NEW_STREAM_TRANSITION_ENDPOINT"),a=!0):a=!1}else a=!1;a||(g.FV.prototype.load.call(this),this.endScreen.show())};
g.k.unload=function(){g.FV.prototype.unload.call(this);this.endScreen.hide();this.endScreen.destroy()};
g.k.onCueRangeEnter=function(a){this.vu()&&(this.endScreen.created||this.endScreen.create(),"load"===a.getId()&&this.load())};
g.k.onCueRangeExit=function(a){"load"===a.getId()&&this.loaded&&this.unload()};
g.k.onVideoDataChange=function(){xqb(this);this.D&&wqb(this)&&(this.endScreen&&(this.endScreen.hide(),this.endScreen.created&&this.endScreen.destroy(),this.endScreen.dispose()),this.j?this.endScreen=new k6(this.player):this.endScreen=new p6(this.player),g.J(this,this.endScreen),g.uU(this.player,this.endScreen.element,4))};g.EV("endscreen",yqb);})(_yt_player);