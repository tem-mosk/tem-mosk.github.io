tiddlywiki --verbose  --load heeg.html --unpackplugin $:/plugins/heeg/Theme --rendertiddlers [!is[system]![index]!type[image/jpeg]] $:/core/templates/static.tiddler.html ./static text/plain  --rendertiddler $:/_sitemap static/sitemap.xml text/vnd.tiddlywiki  --rendertiddler $:/theeg.template.css static/static.css text/vnd.tiddlywiki --rendertiddler $:/_aa.giff/StyleSheetAnimate  static/animate.css text/vnd.tiddlywiki --rendertiddler $:/boot/Yandex_Metrika_Counter.js    static/Yandex_Metrika_Counter.js text/plain --rendertiddler $:/_staticCart.js    static/cart.js text/vnd.tiddlywiki --rendertiddler $:/_heeg.js   static/heeg.js text/plain  --setfield [[$:/HistoryList]] current-tiddler $:/_index text/vnd.tiddlywiki --output ./temp --rendertiddlers [[index]] $:/core/templates/static.tiddler.html ./static text/plain .html "noclean"  && ^
xcopy images output\static\images /s /e /C /Y /d /i && ^
xcopy fonts output\static\fonts /s /e /C /Y /d /i && ^
copy heeg.html output\static\ && ^
copy .\temp\static\index.html output\static\ && ^
copy .htaccess output\static\ && ^
copy favicon.ico output\static\ 



