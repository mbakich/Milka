(self.webpackChunkgrocery_crud_3_frontend=self.webpackChunkgrocery_crud_3_frontend||[]).push([[2090],{12914:(e,t)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(e){return function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},a=t.width?String(t.width):e.defaultWidth;return e.formats[a]||e.formats[e.defaultWidth]}},e.exports=t.default},68776:(e,t)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(e){return function(t,a){var r;if("formatting"===(null!==a&&void 0!==a&&a.context?String(a.context):"standalone")&&e.formattingValues){var n=e.defaultFormattingWidth||e.defaultWidth,i=null!==a&&void 0!==a&&a.width?String(a.width):n;r=e.formattingValues[i]||e.formattingValues[n]}else{var d=e.defaultWidth,o=null!==a&&void 0!==a&&a.width?String(a.width):e.defaultWidth;r=e.values[o]||e.values[d]}return r[e.argumentCallback?e.argumentCallback(t):t]}},e.exports=t.default},79336:(e,t)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(e){return function(t){var a=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},r=a.width,n=r&&e.matchPatterns[r]||e.matchPatterns[e.defaultMatchWidth],i=t.match(n);if(!i)return null;var d,o=i[0],u=r&&e.parsePatterns[r]||e.parsePatterns[e.defaultParseWidth],l=Array.isArray(u)?function(e,t){for(var a=0;a<e.length;a++)if(t(e[a]))return a;return}(u,(function(e){return e.test(o)})):function(e,t){for(var a in e)if(e.hasOwnProperty(a)&&t(e[a]))return a;return}(u,(function(e){return e.test(o)}));return d=e.valueCallback?e.valueCallback(l):l,{value:d=a.valueCallback?a.valueCallback(d):d,rest:t.slice(o.length)}}},e.exports=t.default},8790:(e,t)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(e){return function(t){var a=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},r=t.match(e.matchPattern);if(!r)return null;var n=r[0],i=t.match(e.parsePattern);if(!i)return null;var d=e.valueCallback?e.valueCallback(i[0]):i[0];return{value:d=a.valueCallback?a.valueCallback(d):d,rest:t.slice(n.length)}}},e.exports=t.default},87091:(e,t)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var a={lessThanXSeconds:{one:"mindre \xe4n en sekund",other:"mindre \xe4n {{count}} sekunder"},xSeconds:{one:"en sekund",other:"{{count}} sekunder"},halfAMinute:"en halv minut",lessThanXMinutes:{one:"mindre \xe4n en minut",other:"mindre \xe4n {{count}} minuter"},xMinutes:{one:"en minut",other:"{{count}} minuter"},aboutXHours:{one:"ungef\xe4r en timme",other:"ungef\xe4r {{count}} timmar"},xHours:{one:"en timme",other:"{{count}} timmar"},xDays:{one:"en dag",other:"{{count}} dagar"},aboutXWeeks:{one:"ungef\xe4r en vecka",other:"ungef\xe4r {{count}} vecka"},xWeeks:{one:"en vecka",other:"{{count}} vecka"},aboutXMonths:{one:"ungef\xe4r en m\xe5nad",other:"ungef\xe4r {{count}} m\xe5nader"},xMonths:{one:"en m\xe5nad",other:"{{count}} m\xe5nader"},aboutXYears:{one:"ungef\xe4r ett \xe5r",other:"ungef\xe4r {{count}} \xe5r"},xYears:{one:"ett \xe5r",other:"{{count}} \xe5r"},overXYears:{one:"\xf6ver ett \xe5r",other:"\xf6ver {{count}} \xe5r"},almostXYears:{one:"n\xe4stan ett \xe5r",other:"n\xe4stan {{count}} \xe5r"}},r=["noll","en","tv\xe5","tre","fyra","fem","sex","sju","\xe5tta","nio","tio","elva","tolv"],n=function(e,t,n){var i,d=a[e];return i="string"===typeof d?d:1===t?d.one:n&&n.onlyNumeric?d.other.replace("{{count}}",String(t)):d.other.replace("{{count}}",t<13?r[t]:String(t)),null!==n&&void 0!==n&&n.addSuffix?n.comparison&&n.comparison>0?"om "+i:i+" sedan":i};t.default=n,e.exports=t.default},32990:(e,t,a)=>{"use strict";var r=a(14603).default;Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n=r(a(12914)),i={date:(0,n.default)({formats:{full:"EEEE d MMMM y",long:"d MMMM y",medium:"d MMM y",short:"y-MM-dd"},defaultWidth:"full"}),time:(0,n.default)({formats:{full:"'kl'. HH:mm:ss zzzz",long:"HH:mm:ss z",medium:"HH:mm:ss",short:"HH:mm"},defaultWidth:"full"}),dateTime:(0,n.default)({formats:{full:"{{date}} 'kl.' {{time}}",long:"{{date}} 'kl.' {{time}}",medium:"{{date}} {{time}}",short:"{{date}} {{time}}"},defaultWidth:"full"})};t.default=i,e.exports=t.default},25228:(e,t)=>{"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var a={lastWeek:"'i' EEEE's kl.' p",yesterday:"'ig\xe5r kl.' p",today:"'idag kl.' p",tomorrow:"'imorgon kl.' p",nextWeek:"EEEE 'kl.' p",other:"P"},r=function(e,t,r,n){return a[e]};t.default=r,e.exports=t.default},84596:(e,t,a)=>{"use strict";var r=a(14603).default;Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n=r(a(68776)),i={ordinalNumber:function(e,t){var a=Number(e),r=a%100;if(r>20||r<10)switch(r%10){case 1:case 2:return a+":a"}return a+":e"},era:(0,n.default)({values:{narrow:["f.Kr.","e.Kr."],abbreviated:["f.Kr.","e.Kr."],wide:["f\xf6re Kristus","efter Kristus"]},defaultWidth:"wide"}),quarter:(0,n.default)({values:{narrow:["1","2","3","4"],abbreviated:["Q1","Q2","Q3","Q4"],wide:["1:a kvartalet","2:a kvartalet","3:e kvartalet","4:e kvartalet"]},defaultWidth:"wide",argumentCallback:function(e){return e-1}}),month:(0,n.default)({values:{narrow:["J","F","M","A","M","J","J","A","S","O","N","D"],abbreviated:["jan.","feb.","mars","apr.","maj","juni","juli","aug.","sep.","okt.","nov.","dec."],wide:["januari","februari","mars","april","maj","juni","juli","augusti","september","oktober","november","december"]},defaultWidth:"wide"}),day:(0,n.default)({values:{narrow:["S","M","T","O","T","F","L"],short:["s\xf6","m\xe5","ti","on","to","fr","l\xf6"],abbreviated:["s\xf6n","m\xe5n","tis","ons","tors","fre","l\xf6r"],wide:["s\xf6ndag","m\xe5ndag","tisdag","onsdag","torsdag","fredag","l\xf6rdag"]},defaultWidth:"wide"}),dayPeriod:(0,n.default)({values:{narrow:{am:"fm",pm:"em",midnight:"midnatt",noon:"middag",morning:"morg.",afternoon:"efterm.",evening:"kv\xe4ll",night:"natt"},abbreviated:{am:"f.m.",pm:"e.m.",midnight:"midnatt",noon:"middag",morning:"morgon",afternoon:"efterm.",evening:"kv\xe4ll",night:"natt"},wide:{am:"f\xf6rmiddag",pm:"eftermiddag",midnight:"midnatt",noon:"middag",morning:"morgon",afternoon:"eftermiddag",evening:"kv\xe4ll",night:"natt"}},defaultWidth:"wide",formattingValues:{narrow:{am:"fm",pm:"em",midnight:"midnatt",noon:"middag",morning:"p\xe5 morg.",afternoon:"p\xe5 efterm.",evening:"p\xe5 kv\xe4llen",night:"p\xe5 natten"},abbreviated:{am:"fm",pm:"em",midnight:"midnatt",noon:"middag",morning:"p\xe5 morg.",afternoon:"p\xe5 efterm.",evening:"p\xe5 kv\xe4llen",night:"p\xe5 natten"},wide:{am:"fm",pm:"em",midnight:"midnatt",noon:"middag",morning:"p\xe5 morgonen",afternoon:"p\xe5 eftermiddagen",evening:"p\xe5 kv\xe4llen",night:"p\xe5 natten"}},defaultFormattingWidth:"wide"})};t.default=i,e.exports=t.default},47540:(e,t,a)=>{"use strict";var r=a(14603).default;Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n=r(a(79336)),i={ordinalNumber:(0,r(a(8790)).default)({matchPattern:/^(\d+)(:a|:e)?/i,parsePattern:/\d+/i,valueCallback:function(e){return parseInt(e,10)}}),era:(0,n.default)({matchPatterns:{narrow:/^(f\.? ?Kr\.?|f\.? ?v\.? ?t\.?|e\.? ?Kr\.?|v\.? ?t\.?)/i,abbreviated:/^(f\.? ?Kr\.?|f\.? ?v\.? ?t\.?|e\.? ?Kr\.?|v\.? ?t\.?)/i,wide:/^(f\xf6re Kristus|f\xf6re v\xe5r tid|efter Kristus|v\xe5r tid)/i},defaultMatchWidth:"wide",parsePatterns:{any:[/^f/i,/^[ev]/i]},defaultParseWidth:"any"}),quarter:(0,n.default)({matchPatterns:{narrow:/^[1234]/i,abbreviated:/^q[1234]/i,wide:/^[1234](:a|:e)? kvartalet/i},defaultMatchWidth:"wide",parsePatterns:{any:[/1/i,/2/i,/3/i,/4/i]},defaultParseWidth:"any",valueCallback:function(e){return e+1}}),month:(0,n.default)({matchPatterns:{narrow:/^[jfmasond]/i,abbreviated:/^(jan|feb|mar[s]?|apr|maj|jun[i]?|jul[i]?|aug|sep|okt|nov|dec)\.?/i,wide:/^(januari|februari|mars|april|maj|juni|juli|augusti|september|oktober|november|december)/i},defaultMatchWidth:"wide",parsePatterns:{narrow:[/^j/i,/^f/i,/^m/i,/^a/i,/^m/i,/^j/i,/^j/i,/^a/i,/^s/i,/^o/i,/^n/i,/^d/i],any:[/^ja/i,/^f/i,/^mar/i,/^ap/i,/^maj/i,/^jun/i,/^jul/i,/^au/i,/^s/i,/^o/i,/^n/i,/^d/i]},defaultParseWidth:"any"}),day:(0,n.default)({matchPatterns:{narrow:/^[smtofl]/i,short:/^(s\xf6|m\xe5|ti|on|to|fr|l\xf6)/i,abbreviated:/^(s\xf6n|m\xe5n|tis|ons|tors|fre|l\xf6r)/i,wide:/^(s\xf6ndag|m\xe5ndag|tisdag|onsdag|torsdag|fredag|l\xf6rdag)/i},defaultMatchWidth:"wide",parsePatterns:{any:[/^s/i,/^m/i,/^ti/i,/^o/i,/^to/i,/^f/i,/^l/i]},defaultParseWidth:"any"}),dayPeriod:(0,n.default)({matchPatterns:{any:/^([fe]\.?\s?m\.?|midn(att)?|midd(ag)?|(p\xe5) (morgonen|eftermiddagen|kv\xe4llen|natten))/i},defaultMatchWidth:"any",parsePatterns:{any:{am:/^f/i,pm:/^e/i,midnight:/^midn/i,noon:/^midd/i,morning:/morgon/i,afternoon:/eftermiddag/i,evening:/kv\xe4ll/i,night:/natt/i}},defaultParseWidth:"any"})};t.default=i,e.exports=t.default},82777:(e,t,a)=>{"use strict";var r=a(14603).default;Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n=r(a(87091)),i=r(a(32990)),d=r(a(25228)),o=r(a(84596)),u=r(a(47540)),l={code:"sv",formatDistance:n.default,formatLong:i.default,formatRelative:d.default,localize:o.default,match:u.default,options:{weekStartsOn:1,firstWeekContainsDate:4}};t.default=l,e.exports=t.default},14603:e=>{e.exports=function(e){return e&&e.__esModule?e:{default:e}},e.exports.__esModule=!0,e.exports.default=e.exports}}]);
//# sourceMappingURL=df-80.642d27e8.chunk.js.map