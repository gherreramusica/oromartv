(function(g){var window=this;'use strict';var Aqb=function(a,b){if(!Number.isFinite(a))return String(a);a=String(a);var c=a.indexOf(".");-1===c&&(c=a.length);var d="-"===a[0]?"-":"";d&&(a=a.substring(1));return d+(0,g.ofb)("0",Math.max(0,b-c))+a},Bqb=function(){return{I:"svg",
W:{fill:"#fff",height:"24px",viewBox:"0 0 24 24",width:"24px"},V:[{I:"path",W:{d:"M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"}}]}},Cqb=function(){return{I:"svg",
W:{fill:"#fff",height:"24px",viewBox:"0 0 24 24",width:"24px"},V:[{I:"path",W:{d:"M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"}}]}},Eqb=function(a){"number"===typeof a?(this.date=Dqb(a,0,1),t6(this,1)):g.$a(a)?(this.date=Dqb(a.getFullYear(),a.getMonth(),a.getDate()),t6(this,a.getDate())):(this.date=new Date(g.gb()),a=this.date.getDate(),
this.date.setHours(0),this.date.setMinutes(0),this.date.setSeconds(0),this.date.setMilliseconds(0),t6(this,a))},Dqb=function(a,b,c){b=new Date(a,b,c);
0<=a&&100>a&&b.setFullYear(b.getFullYear()-1900);return b},t6=function(a,b){a.getDate()!=b&&a.date.setUTCHours(a.date.getUTCHours()+(a.getDate()<b?1:-1))},u6=function(a,b){g.BU.call(this,a,{I:"div",
S:"ytp-reminder-menu",W:{role:"menu",tabindex:"-1"},V:[{I:"div",S:"ytp-reminder-menu-contents",V:[{I:"div",S:"ytp-reminder-menu-items"}]}]},100,!0);this.buttonElement=b;this.j=[];this.menuPopupRenderer=void 0;this.items=this.Fa("ytp-reminder-menu-items");this.hide()},Gqb=function(a){var b=Fqb(a),c=0,d={};
for(c=0;c<b.length;d={mX:void 0},c++){var e=a.j[c];e||(e=new g.U({I:"div",S:"ytp-reminder-menu-item",W:{role:"menuitem",tabindex:"0"},V:[{I:"div",S:"ytp-reminder-menu-item-icon",ya:"{{icon}}"},{I:"div",S:"ytp-reminder-menu-item-label",ya:"{{text}}"}]}),d.mX=c,e.Ra("click",function(h){return function(){var l=h.mX;a.Pb();l=Fqb(a)[l];a.oa("reminderMenuItemClicked",l.serviceEndpoint||l.command)}}(d)),e.Da(a.items),a.j[c]=e);
var f=b[c];d=null;switch(f.icon&&f.icon.iconType){case "NOTIFICATIONS":d=Bqb();break;case "NOTIFICATIONS_NONE":d=Cqb();break;case "NOTIFICATIONS_ACTIVE":d=g.Nva()}f=f.text?g.$F(f.text):"";e.update({icon:d,text:f})}for(;c<a.j.length;)a.j.pop().dispose();0===c?a.Pb():a.qd(a.buttonElement)},Fqb=function(a){return(a.menuPopupRenderer&&a.menuPopupRenderer.items||[]).reduce(function(b,c){c&&c.menuServiceItemRenderer&&b.push(c.menuServiceItemRenderer);
return b},[])},v6=function(a){g.U.call(this,{I:"div",
V:[{I:"button",Ma:["ytp-offline-slate-button","ytp-button"],V:[{I:"div",S:"ytp-offline-slate-button-icon",ya:"{{icon}}"},{I:"div",S:"ytp-offline-slate-button-text",ya:"{{text}}"}]}]});this.J=a;this.upcomingEventReminderButtonRenderer=this.toggleButtonRenderer=null;this.B=void 0;this.D=this.j=null;(this.buttonElement=this.Fa("ytp-offline-slate-button"))&&this.T(this.buttonElement,"click",this.G);this.hide()},Iqb=function(a,b,c){!a.toggleButtonRenderer&&b&&b.toggleButtonRenderer?a.toggleButtonRenderer=
b.toggleButtonRenderer:b&&b.toggleButtonRenderer||(a.toggleButtonRenderer=null);
!a.upcomingEventReminderButtonRenderer&&c&&g.R(c,Hqb)?a.upcomingEventReminderButtonRenderer=g.R(c,Hqb):c&&g.R(c,Hqb)||(a.upcomingEventReminderButtonRenderer=null);w6(a)},w6=function(a){if(a.toggleButtonRenderer){var b=a.toggleButtonRenderer;
if(b.isToggled){var c=b.toggledText?g.$F(b.toggledText):"";a.update({text:c,icon:Jqb(b.toggledIcon)})}else c=b.defaultText?g.$F(b.defaultText):"",a.update({text:c,icon:Jqb(b.defaultIcon)});a.show()}else a.upcomingEventReminderButtonRenderer?(b=Kqb(a))?(c=b.text?g.$F(b.text):"",a.update({text:c,icon:Jqb(b.icon)}),a.show()):a.hide():a.hide()},Mqb=function(a,b,c){a.D||(a.D=new g.sE(a.J.U().yk));
var d={context:g.ora(a.D.config_||g.TD())};g.rF()&&(d.context.clientScreenNonce=g.rF());d.params=c;g.tE(a.D,b,d,{timeout:5E3,onSuccess:function(){a.upcomingEventReminderButtonRenderer&&a.B&&(a.upcomingEventReminderButtonRenderer.currentState=a.B,a.B=void 0)},
onError:function(){Lqb(a)},
onTimeout:function(){Lqb(a)}})},Lqb=function(a){a.toggleButtonRenderer?(a.toggleButtonRenderer.isToggled=!a.toggleButtonRenderer.isToggled,w6(a)):a.upcomingEventReminderButtonRenderer&&(a.B=void 0,w6(a))},Jqb=function(a){if(!a)return null;
switch(a.iconType){case "NOTIFICATIONS":return Bqb();case "NOTIFICATIONS_NONE":return Cqb();case "NOTIFICATIONS_ACTIVE":return g.Nva();default:return null}},Kqb=function(a){if(!a.upcomingEventReminderButtonRenderer)return null;
var b=a.B||a.upcomingEventReminderButtonRenderer.currentState;a=g.u(a.upcomingEventReminderButtonRenderer.states||[]);for(var c=a.next();!c.done;c=a.next())if((c=g.R(c.value,Nqb))&&c.state===b&&c.button&&g.R(c.button,g.JM))return g.R(c.button,g.JM);return null},Oqb=function(a){g.U.call(this,{I:"div",
S:"ytp-offline-slate",V:[{I:"div",S:"ytp-offline-slate-background"},{I:"div",S:"ytp-offline-slate-bar",V:[{I:"span",S:"ytp-offline-slate-icon",V:[{I:"svg",W:{fill:"#fff",height:"100%",viewBox:"0 0 24 24",width:"100%"},V:[{I:"path",W:{d:"M16.94 6.91l-1.41 1.45c.9.94 1.46 2.22 1.46 3.64s-.56 2.71-1.46 3.64l1.41 1.45c1.27-1.31 2.05-3.11 2.05-5.09s-.78-3.79-2.05-5.09zM19.77 4l-1.41 1.45C19.98 7.13 21 9.44 21 12.01c0 2.57-1.01 4.88-2.64 6.54l1.4 1.45c2.01-2.04 3.24-4.87 3.24-7.99 0-3.13-1.23-5.96-3.23-8.01zM7.06 6.91c-1.27 1.3-2.05 3.1-2.05 5.09s.78 3.79 2.05 5.09l1.41-1.45c-.9-.94-1.46-2.22-1.46-3.64s.56-2.71 1.46-3.64L7.06 6.91zM5.64 5.45L4.24 4C2.23 6.04 1 8.87 1 11.99c0 3.13 1.23 5.96 3.23 8.01l1.41-1.45C4.02 16.87 3 14.56 3 11.99s1.01-4.88 2.64-6.54z"}},
{I:"circle",W:{cx:"12",cy:"12",r:"3"}}]}]},{I:"span",S:"ytp-offline-slate-messages",V:[{I:"div",S:"ytp-offline-slate-main-text",W:{"aria-label":"{{label}}"},ya:"{{mainText}}"},{I:"div",S:"ytp-offline-slate-subtitle-text",ya:"{{subtitleText}}"}]},{I:"span",S:"ytp-offline-slate-buttons"}]},{I:"button",Ma:["ytp-offline-slate-close-button","ytp-button"],V:[g.cG()]},{I:"button",Ma:["ytp-offline-slate-open-button","ytp-button"],V:[g.bG()]}]});var b=this;this.api=a;this.j=this.B=null;this.background=this.Fa("ytp-offline-slate-background");
this.C=this.Fa("ytp-offline-slate-bar");this.G=new g.Cu(function(){g.Ku(b.C,"ytp-offline-slate-bar-fade")},15E3);
this.K=!1;this.D=new g.Cu(function(){g.Ku(b.element,"ytp-offline-slate-collapsed")},15E3);
g.J(this,this.D);g.J(this,this.G);this.countdownTimer=new g.Cu(this.q0,1E3,this);this.T(a,"presentingplayerstatechange",this.t0);this.T(a,"livestatedata",this.Sa);a=this.Fa("ytp-offline-slate-close-button");this.T(a,"click",function(){g.Ku(b.element,"ytp-offline-slate-collapsed")});
a=this.Fa("ytp-offline-slate-open-button");this.T(a,"click",function(){g.Mu(b.element,"ytp-offline-slate-collapsed")});
this.hide();a=this.getVideoData();a.getPlayerResponse()&&(a=a.getPlayerResponse().playabilityStatus)&&this.Sa(a);a=8===this.api.getPresentingPlayerType()&&!this.getVideoData().Pl;var c=8===this.api.getPresentingPlayerType();g.Ou(this.element,"ytp-offline-slate-premiere-trailer",a);g.Ou(this.element,"ytp-offline-slate-hide-background",c)},Pqb=function(a,b,c){if(b){var d=null!=b.subtitleText?g.$F(b.subtitleText):"";
c=c?c:null!=b.mainText?g.$F(b.mainText):"";var e,f,h,l;b=null!=(l=null==(e=b.mainText)?void 0:null==(f=e.accessibility)?void 0:null==(h=f.accessibilityData)?void 0:h.label)?l:c;a.update({mainText:c,subtitleText:d,label:b});g.Ou(a.element,"ytp-offline-slate-single-text-line",!d);g.Ou(a.C,"ytp-offline-slate-bar-hidden",!c&&!d)}},x6=function(a,b){var c=(0,g.rD)();
this.module="heartbeat";this.trigger=a;this.j=b;this.C=c},Xqb=function(a){g.FV.call(this,a);
var b=this;this.N=!1;this.Z=0;this.G=!1;this.B=new g.Cu(function(){var e=b.player.U(),f=b.getVideoData();y6(b)&&(Qqb(b)?Rqb(b,e,f):(Sqb(b),Tqb(b,e,f)))},0);
this.j=this.heartbeatParams=null;this.D=!1;this.K=new g.Al(1E3,6E4,1);this.sequenceNumber=0;this.offlineSlate=null;this.ma=new g.sE(void 0);this.Y=this.attestationResponse=void 0;this.utcOffsetMinutes=-(new Eqb).getTimezoneOffset();this.C=new g.MK(this);g.J(this,this.B);g.J(this,this.C);Sqb(this);Uqb(this);this.C.T(a,"heartbeatparams",this.EE);this.C.T(a,"presentingplayerstatechange",this.X1);this.C.T(a,"videoplayerreset",this.Y1);this.C.T(a,g.XJ("heartbeat"),this.onCueRangeEnter);this.D&&this.j&&
Vqb(this,void 0,this.j);var c=new g.WJ(1E3,0x7ffffffffffff,{priority:1,namespace:"heartbeat"}),d=new g.WJ(0x8000000000000,0x8000000000000,{id:"stream_end",priority:1,namespace:"heartbeat"});a.tf([c,d]);Wqb(this)},Wqb=function(a){var b=a.getVideoData();
b.Pm&&(b=b.botguardData)&&g.NLa(b,a.player.U())},Sqb=function(a){var b=a.getVideoData();
if(b.Pm&&(b=new g.JLa(b),g.cI.isInitialized()||3<=a.sequenceNumber)){var c=null;if(b.videoData.Qk){var d=g.KLa(b);if(d){c={};var e={};d=d.split("&");d=g.u(d);for(var f=d.next();!f.done;f=d.next())f=f.value.split("="),2===f.length&&(e[f[0]]=f[1]);e.r1a&&(c.webResponse=e.r1a);e.r1c&&(c.error=Yqb[Number(e.r1c)]);c.challenge=b.videoData.Qk}}a.attestationResponse=c||void 0}},Qqb=function(a){var b=a.getVideoData();
if(!g.wT(a.getVideoData())||b.wY)return!1;if(b.useInnertubeDrmService()&&b.K){a="playready"===b.K.flavor&&b.L("html5_innertube_heartbeats_for_playready");var c="widevine"===b.K.flavor&&b.L("html5_innertube_heartbeats_for_widevine");b=g.xR(b.K)&&b.L("html5_innertube_heartbeats_for_fairplay");return!(a||c||b)}return!0},Zqb=function(a){if(Qqb(a))return!!a.heartbeatParams;
var b=a.getVideoData();return g.wT(a.getVideoData())&&b.useInnertubeDrmService()&&!b.Hm&&!b.sC?!1:!!b.heartbeatToken},z6=function(a,b){if(!a.B.isActive()&&a.N){var c=a.getVideoData();
if(Zqb(a)||c.isLivePlayback){if(void 0===b)if(a.G)if(a.D)b=7500;else{var d;b=(null==(d=a.heartbeatParams)?0:d.interval)?1E3*a.heartbeatParams.interval:a.getVideoData().DX||6E4}else b=1E3;a.B.start(b)}}},crb=function(a,b,c){b.Po&&(c=g.Ml(c,{internalipoverride:b.Po}));
var d={cpn:b.clientPlaybackNonce};b.contextParams&&(d.context_params=b.contextParams);b.tb&&(d.kpt=b.tb);c=g.Ml(c,d);g.SB(c,{format:"RAW",method:"GET",timeout:3E4,onSuccess:function(e){if(!a.B.isActive()&&y6(a)){a.K.reset();a.sequenceNumber++;e=e.responseText;var f=$qb(e);if(f){a.player.jb("onHeartbeat",f);var h="ok"===f.status?f.stop_heartbeat?2:0:"stop"===f.status?1:"live_stream_offline"===f.status?0:-1}else h=(h=e.match(arb))?"0"===h[1]?0:1:-1;brb(a,void 0,f,e,h)}},
onError:function(e){y6(a)&&A6(a,!0,"net-"+e.status)},
onTimeout:function(){y6(a)&&A6(a,!0,"timeout")},
withCredentials:!0})},Rqb=function(a,b,c){var d;
if(null!=(d=a.heartbeatParams)&&d.url){var e=g.Ml(a.heartbeatParams.url,{request_id:g.Msa()});c.qa&&(e=g.Ml(e,{vvt:c.qa}),c.mdxEnvironment&&(e=g.Ml(e,{mdx_environment:c.mdxEnvironment})));g.xS(b,c.oauthToken).then(function(f){f&&(e=g.Ml(e,{access_token:f}));crb(a,c,e)})}},y6=function(a){var b=a.getVideoData();
return 3===a.player.getPresentingPlayerType()||g.FG(a.player.Rb(a.getPlayerType()),4)?!1:Zqb(a)||b.isLivePlayback?!0:(B6(a),!1)},Tqb=function(a,b,c){var d,e={videoId:c.videoId,
sequenceNumber:a.sequenceNumber,heartbeatServerData:null!=(d=a.qa)?d:c.heartbeatServerData};a.Y=a.attestationResponse;c.Pm&&(e.attestationResponse=a.Y);var f=g.VT(c),h;d=null!=(h=f.client)?h:{};d.utcOffsetMinutes=a.utcOffsetMinutes;e.context=f;e.cpn=c.clientPlaybackNonce;if(h="undefined"!==typeof Intl?(new Intl.DateTimeFormat).resolvedOptions().timeZone:null)d.timeZone=h;h={heartbeatChecks:[]};if(d=c.getPlayerResponse())c.heartbeatToken&&(e.heartbeatToken=c.heartbeatToken),(d=d.playabilityStatus)&&
(d=d.liveStreamability)&&d.liveStreamabilityRenderer&&h.heartbeatChecks.push("HEARTBEAT_CHECK_TYPE_LIVE_STREAM_STATUS");c.heartbeatToken&&h.heartbeatChecks.push("HEARTBEAT_CHECK_TYPE_YPC");if(g.zJ(b)){h.heartbeatChecks.push("HEARTBEAT_CHECK_TYPE_UNPLUGGED");f=drb(a);d={};null!==f&&(d.clientPlayerPositionUtcMillis=f);var l,m;f=(null==(m=null==(l=a.player.zb())?void 0:g.TV(l))?void 0:m.freePreviewWatchedDuration)||0;0<f&&(d.freePreviewWatchedDuration={seconds:""+f});h.unpluggedParams=d}e.heartbeatRequestParams=
h;c.isLivePlayback?(l=drb(a),null!==l&&(e.playbackState||(e.playbackState={}),e.playbackState.playbackPosition={utcTimeMillis:l})):b.L("enable_heartbeat_vod_playback_position")&&(l=erb(a),null!==l&&(e.playbackState||(e.playbackState={}),e.playbackState.playbackPosition={streamTimeMillis:l}));a.player.oa("heartbeatRequest",e);var n={timeout:3E4,onSuccess:function(p){if(!a.B.isActive()&&y6(a)){var q=a.getVideoData(),r=q.Pm&&null==a.Y,t;q.Pm=!(null==(t=p.heartbeatAttestationConfig)||!t.requiresAttestation)||
r;r=p.playabilityStatus;t=JSON.stringify(r)||"{}";p.authenticationMismatch&&a.player.va("authshear",{});var v=-1;var x=p.playabilityStatus;x&&(a.player.jb("onHeartbeat",x),"OK"===x.status?v=p.stopHeartbeat?2:0:"UNPLAYABLE"===x.status?v=1:"LIVE_STREAM_OFFLINE"===x.status&&(v=0));a.sequenceNumber&&-1===v||a.K.reset();a.sequenceNumber++;p.heartbeatServerData&&(a.qa=p.heartbeatServerData);q.uC=p;(x=p.playerCueRangeSet)&&g.ARa(q,x);p.playerCueRanges&&0<p.playerCueRanges.length&&(q.cueRanges=p.playerCueRanges);
var B,F;(null==(B=p.progressBarConfig)?0:B.progressBarStartPosition)&&(null==(F=p.progressBarConfig)?0:F.progressBarEndPosition)&&(q.progressBarStartPosition=p.progressBarConfig.progressBarStartPosition,q.progressBarEndPosition=p.progressBarConfig.progressBarEndPosition);q.compositeLiveIngestionOffsetToken=p.compositeLiveIngestionOffsetToken;p.compositeLiveStatusToken!==q.compositeLiveStatusToken&&(q.compositeLiveStatusToken=p.compositeLiveStatusToken);q.oa("dataupdated");brb(a,p,r,t,v)}},
onError:function(p){y6(a)&&A6(a,!0,"net-"+p.status)},
onTimeout:function(){y6(a)&&A6(a,!0,"timeout")}};
g.xS(b,g.NT(c)).then(function(p){p&&(n.UU="Bearer "+p);g.tE(a.ma,"player/heartbeat",e,n)})},brb=function(a,b,c,d,e){-1===e?(c="decode "+g.gg(d,3),A6(a,!1,c)):2===e?(B6(a),a.G=!0):(a.Z=0,a.B.stop(),1===e?(a.G=!1,c&&"PLAYABILITY_ERROR_CODE_EMBARGOED"===c.errorCode&&a.player.xo(!0),e="",a.player.U().L("html5_log_playability_reason")&&(e="pe."+(null==c?void 0:c.errorCode)+";ps."+(null==c?void 0:c.status)),a.player.Ag("heartbeat.stop",2,a.uf(d),e),g.cD("heartbeatActionPlayerHalted",frb(c)),(null==b?0:
b.videoTransitionEndpoint)&&c&&(b=b.videoTransitionEndpoint,(d=g.R(b,g.mT))&&grb(a,d,c,{itct:null==b?void 0:b.clickTrackingParams}))):(a.G=!0,d=0,a.D&&c&&(d=Vqb(a,b,c),a.player.oa("livestatedata",c)),d?z6(a,d):z6(a)))},Vqb=function(a,b,c){var d=c.liveStreamability&&c.liveStreamability.liveStreamabilityRenderer,e=!(!d||!(d.switchStreamsImmediately||d.transitionTiming&&"STREAM_TRANSITION_TIMING_IMMEDIATELY"===d.transitionTiming));
b=hrb(a,b,d);var f=a.getVideoData(),h=a.player.Rb(a.getPlayerType()),l=h.isPlaying()&&!g.BT(f)&&!a.player.isAtLiveHead(a.getPlayerType());if(f.U().Uc()){var m,n=(null==(m=a.player.nf())?void 0:m.qc())||{};n.status=c.status||"";n.dvr=""+ +l;n["switch"]=""+ +e;n.ended=""+ +!(!d||!d.displayEndscreen);a.player.va("heartbeat",n)}if(l&&!e)return b;e=d&&d.streamTransitionEndpoint&&g.R(d.streamTransitionEndpoint,g.mT);if("STREAM_TRANSITION_TIMING_AT_STREAM_END"===(d&&d.transitionTiming))a.getVideoData().transitionEndpointAtEndOfStream=
e;else if(e&&grb(a,e,c))return b;if("OK"===c.status.toUpperCase()){e=d&&d.broadcastId;m=a.j&&a.j.liveStreamability&&a.j.liveStreamability.liveStreamabilityRenderer&&a.j.liveStreamability.liveStreamabilityRenderer.broadcastId;l=e!==m&&null!=e;if(!g.zT(f)||l){var p={video_id:f.videoId};f.BC&&(p.is_live_destination="1");a.player.L("web_player_heartbeat_request_watch_next")||(p.disable_watch_next=!0,p.raw_watch_next_response=f.getWatchNextResponse());p.autonav_state=f.autonavState;p.oauth_token=f.oauthToken;
p.force_gvi=f.Oo;p.wm=f.wm;f.G&&(p.vss_credentials_token=f.G,p.vss_credentials_token_type=f.Mm);f.qa&&(p.vvt=f.qa);d=void 0;g.zT(f)?l&&(d=new x6("broadcastIdChanged",m+","+e),a.VI("HEARTBEAT_ACTION_TRIGGER_IMMEDIATE","HEARTBEAT_ACTION_TRANSITION_REASON_BROADCAST_ID_CHANGED",c)):(e&&(d=new x6("formatsReceived",""+e)),a.VI("HEARTBEAT_ACTION_TRIGGER_IMMEDIATE","HEARTBEAT_ACTION_TRANSITION_REASON_LIVE_STREAM_WENT_ONLINE",c));a.player.loadVideoByPlayerVars(p,void 0,void 0,void 0,d);return b}a.player.Bg("heartbeat",
a.getPlayerType())}d&&d.displayEndscreen&&(a.offlineSlate?(a=a.offlineSlate,a.K=!0,a.Eb&&a.api.vB()):g.FL(h)&&(f=(null==(p=a.player.nf())?void 0:p.qc())||{},a.player.va("hbse",f,!0),a.player.vB(),a.player.jb("onLiveMediaEnded",c)));return b},hrb=function(a,b,c){return a.player.L("web_player_use_heartbeat_poll_delay_ms")&&(a=Number(null==b?void 0:b.pollDelayMs))?a:(c=Number(null==c?void 0:c.pollDelayMs))?c:0},A6=function(a,b,c){var d=a.player.U();
if(!a.B.isActive()){a.B.stop();a.Z++;var e=b?"heartbeat.net":"heartbeat.servererror";var f=a.getVideoData();if(f.RX||b&&!g.wT(a.getVideoData())&&!Zqb(a)&&f.isLivePlayback)f=!1;else{var h,l;(null==(l=a.heartbeatParams)?0:l.retries)?h=a.heartbeatParams.retries:h=f.EX||5;f=a.Z>=h}f?(g.cD("heartbeatActionPlayerHalted",b?{enforcedPolicyToHaltOnNetworkFailure:!0}:frb()),(b=a.getVideoData())&&b.isLivePlayback?a.player.Ag(e,1,"Video playback interrupted. Please try again.",c):a.player.Ag(e,1,"Sorry, there was an error licensing this video.",
c)):(d.L("html5_report_non_fatal_heartbeat_error")&&a.player.Or(e,{msg:c}),z6(a,a.K.getValue()),g.Bl(a.K))}},frb=function(a){var b={enforcedPolicyToHaltOnNetworkFailure:!1};
a&&(b.serializedServerContext=a.additionalLoggingData);return b},B6=function(a){a.Z=0;
a.B.stop();a.G=!1;a.sequenceNumber=0},Uqb=function(a){var b=a.getVideoData(),c=a.player.U();
if(b.isLivePlayback)if(g.kPa(c.G)){a.D=!0;a.N=!0;if(!g.BJ(c)||g.zJ(c))a.offlineSlate=new Oqb(a.player),g.J(a,a.offlineSlate),g.uU(a.player,a.offlineSlate.element,4);(b=b.getPlayerResponse())&&b.playabilityStatus&&(a.j=b.playabilityStatus);var d;"UNPLAYABLE"!==(null==(d=a.j)?void 0:d.status)&&(a.j?(d=hrb(a,void 0,a.j.liveStreamability&&a.j.liveStreamability.liveStreamabilityRenderer))?z6(a,d):z6(a,7500):z6(a,1E3))}else a.player.Ag("html5.unsupportedlive",2,"HTML5_NO_AVAILABLE_FORMATS_FALLBACK","nolive.1");
else g.Fb(b.Ga,"heartbeat")&&a.player.Bg("heartbeat",a.getPlayerType())},grb=function(a,b,c,d){var e=b&&b.videoId;
return e?(a.player.Ko(e,Object.assign({},{autonav:"1"},d||{}),void 0,!0,!0,b,g.NT(a.getVideoData())),a.VI("HEARTBEAT_ACTION_TRIGGER_IMMEDIATE","HEARTBEAT_ACTION_TRANSITION_REASON_HAS_NEW_STREAM_TRANSITION_ENDPOINT",c),!0):!1},drb=function(a){return(a=a.player.getProgressState(a.getPlayerType()).ingestionTime)&&isFinite(a)?""+Math.floor(1E3*a):null},erb=function(a){return(a=a.player.getCurrentTime(a.getPlayerType()))&&isFinite(a)?""+Math.floor(1E3*a):null},$qb=function(a){try{var b=JSON.parse(a);
return null!=b?b:void 0}catch(c){}},irb={ERAS:["BC",
"AD"],ERANAMES:["Before Christ","Anno Domini"],NARROWMONTHS:"JFMAMJJASOND".split(""),STANDALONENARROWMONTHS:"JFMAMJJASOND".split(""),MONTHS:"January February March April May June July August September October November December".split(" "),STANDALONEMONTHS:"January February March April May June July August September October November December".split(" "),SHORTMONTHS:"Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),STANDALONESHORTMONTHS:"Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),
WEEKDAYS:"Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),STANDALONEWEEKDAYS:"Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),SHORTWEEKDAYS:"Sun Mon Tue Wed Thu Fri Sat".split(" "),STANDALONESHORTWEEKDAYS:"Sun Mon Tue Wed Thu Fri Sat".split(" "),NARROWWEEKDAYS:"SMTWTFS".split(""),STANDALONENARROWWEEKDAYS:"SMTWTFS".split(""),SHORTQUARTERS:["Q1","Q2","Q3","Q4"],QUARTERS:["1st quarter","2nd quarter","3rd quarter","4th quarter"],AMPMS:["AM","PM"],DATEFORMATS:["EEEE, MMMM d, y",
"MMMM d, y","MMM d, y","M/d/yy"],TIMEFORMATS:["h:mm:ss\u202fa zzzz","h:mm:ss\u202fa z","h:mm:ss\u202fa","h:mm\u202fa"],DATETIMEFORMATS:["{1} 'at' {0}","{1} 'at' {0}","{1}, {0}","{1}, {0}"],FIRSTDAYOFWEEK:6,WEEKENDRANGE:[5,6],FIRSTWEEKCUTOFFDAY:5},jrb=irb;jrb=irb;var Yqb=["ATTESTATION_ERROR_UNKNOWN","ATTESTATION_ERROR_VM_NOT_INITIALIZED","ATTESTATION_ERROR_VM_NO_RESPONSE","ATTESTATION_ERROR_VM_TIMEOUT","ATTESTATION_ERROR_VM_INTERNAL_ERROR"];g.k=Eqb.prototype;g.k.YV=jrb.FIRSTDAYOFWEEK;g.k.ZV=jrb.FIRSTWEEKCUTOFFDAY;
g.k.clone=function(){var a=new Eqb(this.date);a.YV=this.YV;a.ZV=this.ZV;return a};
g.k.getFullYear=function(){return this.date.getFullYear()};
g.k.getYear=function(){return this.getFullYear()};
g.k.getMonth=function(){return this.date.getMonth()};
g.k.getDate=function(){return this.date.getDate()};
g.k.getTime=function(){return this.date.getTime()};
g.k.getDay=function(){return this.date.getDay()};
g.k.getUTCFullYear=function(){return this.date.getUTCFullYear()};
g.k.getUTCMonth=function(){return this.date.getUTCMonth()};
g.k.getUTCDate=function(){return this.date.getUTCDate()};
g.k.getUTCDay=function(){return this.date.getDay()};
g.k.getUTCHours=function(){return this.date.getUTCHours()};
g.k.getUTCMinutes=function(){return this.date.getUTCMinutes()};
g.k.getTimezoneOffset=function(){return this.date.getTimezoneOffset()};
g.k.set=function(a){this.date=new Date(a.getFullYear(),a.getMonth(),a.getDate())};
g.k.setFullYear=function(a){this.date.setFullYear(a)};
g.k.setYear=function(a){this.setFullYear(a)};
g.k.setMonth=function(a){this.date.setMonth(a)};
g.k.setDate=function(a){this.date.setDate(a)};
g.k.setTime=function(a){this.date.setTime(a)};
g.k.setUTCFullYear=function(a){this.date.setUTCFullYear(a)};
g.k.setUTCMonth=function(a){this.date.setUTCMonth(a)};
g.k.setUTCDate=function(a){this.date.setUTCDate(a)};
g.k.add=function(a){if(a.years||a.months){var b=this.getMonth()+a.months+12*a.years,c=this.getYear()+Math.floor(b/12);b%=12;0>b&&(b+=12);a:{switch(b){case 1:var d=0!=c%4||0==c%100&&0!=c%400?28:29;break a;case 5:case 8:case 10:case 3:d=30;break a}d=31}d=Math.min(d,this.getDate());this.setDate(1);this.setFullYear(c);this.setMonth(b);this.setDate(d)}a.days&&(c=this.getYear(),b=0<=c&&99>=c?-1900:0,a=new Date((new Date(c,this.getMonth(),this.getDate(),12)).getTime()+864E5*a.days),this.setDate(1),this.setFullYear(a.getFullYear()+
b),this.setMonth(a.getMonth()),this.setDate(a.getDate()),t6(this,a.getDate()))};
g.k.equals=function(a){return!(!a||this.getYear()!=a.getYear()||this.getMonth()!=a.getMonth()||this.getDate()!=a.getDate())};
g.k.toString=function(){var a=this.getFullYear(),b=0>a?"-":1E4<=a?"+":"";return[b+Aqb(Math.abs(a),b?6:4),Aqb(this.getMonth()+1,2),Aqb(this.getDate(),2)].join("")+""};
g.k.valueOf=function(){return this.date.valueOf()};var krb=new g.jw("addUpcomingEventReminderEndpoint");var lrb=new g.jw("removeUpcomingEventReminderEndpoint");var mrb=new g.jw("updateUpcomingEventReminderButtonStateCommand");var Hqb=new g.jw("upcomingEventReminderButtonRenderer"),Nqb=new g.jw("upcomingEventReminderButtonStateRenderer");g.w(u6,g.BU);u6.prototype.hide=function(){this.buttonElement&&this.buttonElement.removeAttribute("aria-haspopup");g.BU.prototype.hide.call(this)};
u6.prototype.show=function(){this.buttonElement&&this.buttonElement.setAttribute("aria-haspopup","true");g.BU.prototype.show.call(this)};
u6.prototype.xa=function(){g.ub(this.j);g.BU.prototype.xa.call(this)};g.w(v6,g.U);
v6.prototype.G=function(){if(this.toggleButtonRenderer){var a=this.toggleButtonRenderer;a.isToggled?this.C(a.toggledServiceEndpoint):this.C(a.defaultServiceEndpoint);a.isToggled=!a.isToggled;w6(this)}else if(this.upcomingEventReminderButtonRenderer)if(this.j&&this.j.Eb)this.j.Pb();else{var b=Kqb(this);b&&this.C(b.serviceEndpoint||b.command);b=(null==(a=g.R(null==b?void 0:b.command,g.JG))?void 0:a.commands)||[];a:{a=g.u(b);for(var c=a.next();!c.done;c=a.next()){var d=b=void 0;if(c=null==(b=g.R(c.value,
g.Ygb))?void 0:null==(d=b.popup)?void 0:d.menuPopupRenderer){a=c;break a}}a=void 0}this.j||(this.j=new u6(this.J,this.buttonElement),this.j.Da(this.element),g.J(this,this.j),this.j.subscribe("reminderMenuItemClicked",this.C,this));b=this.j;b.menuPopupRenderer=a;Gqb(b)}};
v6.prototype.C=function(a){var b=g.R(a,krb),c=g.R(a,lrb);if(a&&(b||c)){if(b){var d=b;var e="notification/add_upcoming_event_reminder"}else c&&(d=c,e="notification/remove_upcoming_event_reminder");if(e&&d&&d.params)for(Mqb(this,e,d.params),a=g.u(d.commands||[]),b=a.next();!b.done;b=a.next())if((b=b.value)&&g.R(b,mrb)){this.B=g.R(b,mrb).state;w6(this);break}}};g.w(Oqb,g.U);g.k=Oqb.prototype;g.k.getPlayerType=function(){if(8===this.api.getPresentingPlayerType())return 1};
g.k.getVideoData=function(){return this.api.getVideoData(this.getPlayerType())};
g.k.Sa=function(a){var b,c,d=null==a?void 0:null==(b=a.liveStreamability)?void 0:null==(c=b.liveStreamabilityRenderer)?void 0:c.offlineSlate;if(d){this.B=a;b=d.liveStreamOfflineSlateRenderer;b.canShowCountdown?this.q0():Pqb(this,b);var e,f,h,l;if(c=null==a?void 0:null==(e=a.liveStreamability)?void 0:null==(f=e.liveStreamabilityRenderer)?void 0:null==(h=f.offlineSlate)?void 0:null==(l=h.liveStreamOfflineSlateRenderer)?void 0:l.thumbnail){e=0;f=null;h=c.thumbnails;for(l=0;l<h.length;l++)h[l].width>
e&&(e=h[l].width||0,f=h[l].url);f&&(this.background.style.backgroundImage="url("+f+")")}else this.background.style.backgroundImage="";b.actionButtons||b.reminderButton?(this.j||(this.j=new v6(this.api),this.j.Da(this.Fa("ytp-offline-slate-buttons")),g.J(this,this.j)),Iqb(this.j,b.actionButtons&&b.actionButtons[0],b.reminderButton)):this.j&&Iqb(this.j,null,null);this.B=a}else this.B=null;this.t0()};
g.k.t0=function(a){if(8===this.api.getPresentingPlayerType())var b=!0;else{var c=this.api.Rb(),d=this.getVideoData();b=d.isLivePlayback&&(g.FL(c)||g.FG(c,2)||g.FG(c,64));var e=2===d.autonavState&&g.FG(c,2);c=c.isPlaying()&&!g.BT(d)&&!this.api.isAtLiveHead(void 0,!0);b=b&&!c&&!e}b&&this.B?this.Eb?(null==a?0:g.HG(a,2))&&!this.getVideoData().Pl&&(g.Mu(this.element,"ytp-offline-slate-collapsed"),this.D.stop(),g.Mu(this.C,"ytp-offline-slate-bar-fade"),this.G.start()):(this.show(),this.D.start(),this.api.oa("offlineslatestatechange"),
this.K&&this.api.vB()):this.Eb&&(this.hide(),this.api.oa("offlineslatestatechange"))};
g.k.q0=function(){var a,b,c,d,e=null==(a=this.B)?void 0:null==(b=a.liveStreamability)?void 0:null==(c=b.liveStreamabilityRenderer)?void 0:null==(d=c.offlineSlate)?void 0:d.liveStreamOfflineSlateRenderer;e&&(a=Math.floor(g.gb()/1E3),b=e.canShowCountdown&&Number(e.scheduledStartTime),!b||b<=a?(Pqb(this,e),this.countdownTimer.stop()):(Pqb(this,e,g.PG(b-a)),g.Du(this.countdownTimer)))};
g.k.xa=function(){this.countdownTimer.dispose();this.countdownTimer=null;g.U.prototype.xa.call(this)};x6.prototype.B=function(a){return this.trigger&&a.trigger?this.module===a.module&&this.trigger===a.trigger&&this.j===a.j:!1};
x6.prototype.isExpired=function(){return 6E4<(0,g.rD)()-this.C};
x6.prototype.toString=function(){return this.module+":"+this.trigger+":"+this.j};g.w(Xqb,g.FV);g.k=Xqb.prototype;g.k.xa=function(){B6(this);this.player.lf("heartbeat");g.FV.prototype.xa.call(this)};
g.k.onCueRangeEnter=function(){this.N=!0;z6(this,2E3)};
g.k.EE=function(a){this.heartbeatParams=a;z6(this,2E3)};
g.k.X1=function(a){var b;8!==this.player.getPresentingPlayerType()&&"UNPLAYABLE"!==(null==(b=this.j)?void 0:b.status)&&(g.FG(a.state,2)||g.FG(a.state,64)?(B6(this),this.D&&(this.N=!0,z6(this,1E3))):(g.FG(a.state,1)||g.FG(a.state,8))&&z6(this,2E3))};
g.k.Y1=function(){3!==this.player.getPresentingPlayerType()&&z6(this,2E3)};
g.k.getPlayerType=function(){if(8===this.player.getPresentingPlayerType())return 1};
g.k.getVideoData=function(){return this.player.getVideoData(this.getPlayerType())};
g.k.Ek=function(a){switch(a){case 4:case 3:return!1}return!0};
g.k.VI=function(a,b,c){a={trigger:a,reason:b};c&&(a.serializedServerContext=c.additionalLoggingData);g.cD("heartbeatActionPlayerTransitioned",a)};
g.k.uf=function(a){var b="LICENSE",c=$qb(a);if(c)return c.reason||g.bW[b]||"";(a=a.match(arb))&&(a=Number(a[1]))&&(b=g.yBa(a));return g.bW[b]||""};
g.k.dE=function(){return!!this.offlineSlate&&this.offlineSlate.Eb};
var arb=/^GLS\/1.0 (\d+) (\w+).*?\r\n\r\n([\S\s]*)$/;g.EV("heartbeat",Xqb);})(_yt_player);
