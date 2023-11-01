(()=>{"use strict";function e(t){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(t)}function t(t,i){for(var a=0;a<i.length;a++){var r=i[a];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,(n=r.key,o=void 0,o=function(t,i){if("object"!==e(t)||null===t)return t;var a=t[Symbol.toPrimitive];if(void 0!==a){var r=a.call(t,i||"default");if("object"!==e(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===i?String:Number)(t)}(n,"string"),"symbol"===e(o)?o:String(o)),r)}var n,o}var i=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.uploader=t,this.isSupportBase64=this.supportBase64()}var i,a,r;return i=e,(a=[{key:"supportBase64",value:function(){var e=new Image,t=!0;return e.onload=e.onerror=function(){1==this.width&&1==this.height||(t=!1)},e.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",t}},{key:"showError",value:function(e){var t="Unknown error!";e&&e.data&&(t=e.data.message||t),Dcat.error(t)}},{key:"orderFiles",value:function(e){var t=this,i=e.parents("li").first(),a=e.data("id"),r=e.data("order"),n=i.prev(),o=i.next();if(r){if(!n.length)return;return t.swrapUploadedFile(a,r),void t.uploader.reRenderUploadedFiles()}o.length&&(t.swrapUploadedFile(a,r),t.uploader.reRenderUploadedFiles())}},{key:"swrapUploadedFile",value:function(e,t){var i=this,a=i.uploader.addUploadedFile.uploadedFiles,r=parseInt(i.searchUploadedFile(e)),n=a[r],o=a[r-1],l=a[r+1];if(t){if(0===r)return;a[r-1]=n,a[r]=o}else{if(!l)return;a[r+1]=n,a[r]=l}i.setUploadedFilesToInput()}},{key:"setUploadedFilesToInput",value:function(){var e,t=this.uploader,i=t.addUploadedFile.uploadedFiles,a=[];for(e in i)i[e]&&a.push(i[e].serverId);t.input.set(a)}},{key:"searchUploadedFile",value:function(e){var t=this.uploader.addUploadedFile.uploadedFiles;for(var i in t)if(t[i].serverId===e)return i;return-1}}])&&t(i.prototype,a),r&&t(i,r),Object.defineProperty(i,"prototype",{writable:!1}),e}();function a(e){return a="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},a(e)}function r(e,t){for(var i=0;i<t.length;i++){var r=t[i];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,(n=r.key,o=void 0,o=function(e,t){if("object"!==a(e)||null===e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var r=i.call(e,t||"default");if("object"!==a(r))return r;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(n,"string"),"symbol"===a(o)?o:String(o)),r)}var n,o}var n=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.uploader=t}var t,i,a;return t=e,(i=[{key:"delete",value:function(e,t){var i=this.uploader,a=i.options,r=i.uploader;Dcat.confirm(i.lang.trans("confirm_delete_file"),e.serverId,(function(){var n=a.deleteData;if(n.key=e.serverId,!n.key)return i.input.delete(e.serverId),r.removeFile(e);n._column=i.getColumn(),n._relation=i.relation,Dcat.loading(),$.post({url:a.deleteUrl,data:n,success:function(e){Dcat.loading(!1),e.status?t(e):i.helper.showError(e)}})}))}},{key:"update",value:function(){var e=this.uploader,t=e.uploader,i=e.options,a=e.getColumn(),r=this.relation,n=e.input.get(),o=t.getStats().successNum,l=$.extend({},i.formData);if(o&&n&&i.autoUpdateColumn){if(r){if(!r[1])return;l[r[0]]={},l[r[0]][r[1]]={},l[r[0]][r[1]][a]=n.join(",")}else l[a]=n.join(",");delete l._relation,delete l.upload_column,$.post({url:i.updateServer,data:l})}}}])&&r(t.prototype,i),a&&r(t,a),Object.defineProperty(t,"prototype",{writable:!1}),e}();function o(e){return o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},o(e)}function l(e,t){for(var i=0;i<t.length;i++){var a=t[i];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,(r=a.key,n=void 0,n=function(e,t){if("object"!==o(e)||null===e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var a=i.call(e,t||"default");if("object"!==o(a))return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(r,"string"),"symbol"===o(n)?n:String(n)),a)}var r,n}var s=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.uploader=t,this.$selector=t.$selector.find(t.options.inputSelector)}var t,i,a;return t=e,(i=[{key:"get",value:function(){var e=this.$selector.val();return e?e.split(","):[]}},{key:"add",value:function(e){var t=this.get();t.push(e),this.set(t)}},{key:"set",value:function(e){e=e.filter((function(e,t,i){return i.indexOf(e)===t})).filter((function(e){return!!e})),this.$selector.val(e.join(",")).trigger("change")}},{key:"delete",value:function(e){var t=this;if(t.deleteUploadedFile(e),!e)return t.$selector.val("");t.set(t.get().filter((function(t){return t!=e})))}},{key:"deleteUploadedFile",value:function(e){var t=this.uploader.addUploadedFile;t.uploadedFiles=t.uploadedFiles.filter((function(t){return t.serverId!=e}))}},{key:"removeValidatorErrors",value:function(){this.$selector.parents(".form-group,.form-label-group,.form-field").find(".with-errors").html("")}}])&&l(t.prototype,i),a&&l(t,a),Object.defineProperty(t,"prototype",{writable:!1}),e}();function u(e){return u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},u(e)}function d(e,t){for(var i=0;i<t.length;i++){var a=t[i];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,(r=a.key,n=void 0,n=function(e,t){if("object"!==u(e)||null===e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var a=i.call(e,t||"default");if("object"!==u(a))return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(r,"string"),"symbol"===u(n)?n:String(n)),a)}var r,n}var c=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.uploader=t,this.state="pending",this.originalFilesNum=Dcat.helpers.len(t.options.preview)}var t,i,a;return t=e,(i=[{key:"switch",value:function(e,t){var i=this,a=i.uploader;if(t=t||{},e!==i.state){switch(a.$uploadButton&&(a.$uploadButton.removeClass("state-"+i.state),a.$uploadButton.addClass("state-"+e)),i.state=e,i.state){case"pending":i.pending();break;case"ready":i.ready();break;case"uploading":i.uploading();break;case"paused":i.paused();break;case"confirm":i.confirm();break;case"finish":i.finish();break;case"decrOriginalFileNum":i.decrOriginalFileNum();break;case"incrOriginalFileNum":i.incrOriginalFileNum();break;case"decrFileNumLimit":i.decrFileNumLimit(t.num);break;case"incrFileNumLimit":i.incrFileNumLimit(t.num||1);break;case"init":i.init()}i.updateStatusText()}}},{key:"incrOriginalFileNum",value:function(){this.originalFilesNum++}},{key:"decrOriginalFileNum",value:function(){this.originalFilesNum>0&&this.originalFilesNum--}},{key:"confirm",value:function(){var e,t=this.uploader,i=t.uploader;i&&(t.$progress.hide(),t.$selector.find(t.options.addFileButton).removeClass("element-invisible"),t.$uploadButton.text(t.lang.trans("start_upload")),(e=i.getStats()).successNum&&!e.uploadFailNum&&this.switch("finish"))}},{key:"paused",value:function(){var e=this.uploader;e.$progress.show(),e.$uploadButton.text(e.lang.trans("go_on_upload"))}},{key:"uploading",value:function(){var e=this.uploader;e.$selector.find(e.options.addFileButton).addClass("element-invisible"),e.$progress.show(),e.$uploadButton.text(e.lang.trans("pause_upload"))}},{key:"pending",value:function(){var e=this.uploader;e.options.disabled||(e.$placeholder.removeClass("element-invisible"),e.$files.hide(),e.$statusBar.addClass("element-invisible"),e.isImage()&&(e.$wrapper.removeAttr("style"),e.$wrapper.find(".queueList").removeAttr("style")),e.uploader.refresh())}},{key:"decrFileNumLimit",value:function(e){var t,i=this.uploader.uploader;i&&("-1"==(t=i.option("fileNumLimit"))&&(t=0),0==(e=t>=(e=e||1)?t-e:0)&&(e="-1"),i.option("fileNumLimit",e))}},{key:"incrFileNumLimit",value:function(e){var t,i=this.uploader.uploader;i&&("-1"==(t=i.option("fileNumLimit"))&&(t=0),e=t+(e=e||1),i.option("fileNumLimit",e))}},{key:"ready",value:function(){var e=this.uploader,t=e.options;e.$placeholder.addClass("element-invisible"),e.$selector.find(e.options.addFileButton).removeClass("element-invisible"),e.$files.show(),t.disabled||e.$statusBar.removeClass("element-invisible"),e.uploader.refresh(),e.isImage()&&e.$wrapper.find(".queueList").css({border:"1px solid #d3dde5",padding:"5px"}),setTimeout((function(){e.input.removeValidatorErrors()}),10)}},{key:"finish",value:function(){var e,t=this.uploader,i=t.options,a=t.uploader;a&&((e=a.getStats()).successNum?(Dcat.success(t.lang.trans("upload_success_message",{success:e.successNum})),setTimeout((function(){1==i.upload.fileNumLimit&&(a.request("get-stats").numOfSuccess=0)}),10)):(this.state="done",Dcat.reload()))}},{key:"init",value:function(){var e=this,t=e.uploader,i=t.options;t.$uploadButton.addClass("state-"+e.state),e.updateProgress(),e.originalFilesNum||i.disabled?(t.$placeholder.addClass("element-invisible"),i.disabled?t.$wrapper.addClass("disabled"):t.$statusBar.show(),e.switch("ready")):t.isImage()&&(t.$wrapper.removeAttr("style"),t.$wrapper.find(".queueList").css("margin","0")),t.uploader.refresh()}},{key:"updateStatusText",value:function(){var e,t=this,i=t.uploader,a=i.uploader,r=i.lang.trans.bind(i.lang),n="";function o(){(e=a.getStats()).successNum&&(n=r("selected_success",{num:i.fileCount,size:WebUploader.formatSize(i.fileSize),success:e.successNum})),e.uploadFailNum&&(n+=(n?r("dot"):"")+r("failed_num",{fail:e.uploadFailNum}))}a&&("ready"===t.state?(e=a.getStats(),i.fileCount?n=r("selected_files",{num:i.fileCount,size:WebUploader.formatSize(i.fileSize)}):o()):"confirm"===t.state?(e=a.getStats()).uploadFailNum&&(n=r("selected_has_failed",{success:e.successNum,fail:e.uploadFailNum})):o(),i.$infoBox.html(n))}},{key:"updateProgress",value:function(){var e,t=this.uploader,i=0,a=0,r=t.$progress.find(".progress-bar");$.each(t.percentages,(function(e,t){a+=t[0],i+=t[0]*t[1]})),e=a?i/a:0,e=Math.round(100*e)+"%",r.text(e),r.css("width",e),this.updateStatusText()}}])&&d(t.prototype,i),a&&d(t,a),Object.defineProperty(t,"prototype",{writable:!1}),e}();function p(e){return p="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},p(e)}function f(e,t){for(var i=0;i<t.length;i++){var a=t[i];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,(r=a.key,n=void 0,n=function(e,t){if("object"!==p(e)||null===e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var a=i.call(e,t||"default");if("object"!==p(a))return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(r,"string"),"symbol"===p(n)?n:String(n)),a)}var r,n}var m=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.uploader=t}var t,i,a;return t=e,(i=[{key:"render",value:function(e){var t,i,a=this,r=a.uploader,n=r.isImage(),o=WebUploader.formatSize(e.size),l=e.name||null;n?(t=$('<li id="'.concat(r.getFileViewSelector(e.id),'" title="').concat(l,'" >\n                    <p class="file-type">').concat(e.ext.toUpperCase()||"FILE",'</p>\n                    <p class="imgWrap "></p>\n                    <p class="title" style="">').concat(e.name,'</p>\n                    <p class="title" style="margin-bottom:20px;">(<b>').concat(o,"</b>)</p>\n                    </li>")),i=$('<div class="file-panel">\n                    <a class="btn btn-sm btn-white" data-file-act="cancel"><i class="feather icon-x red-dark" style="font-size:13px"></i></a>\n                    <a class="btn btn-sm btn-white" data-file-act="delete" style="display: none">\n                    <i class="feather icon-trash red-dark" style="font-size:13px"></i></a>\n                    <a class="btn btn-sm btn-white" data-file-act="preview" ><i class="feather icon-zoom-in"></i></a>\n                    <a class=\'btn btn-sm btn-white\' data-file-act=\'order\' data-order="1" style="display: none"><i class=\'feather icon-arrow-up\'></i></a>\n                    <a class=\'btn btn-sm btn-white\' data-file-act=\'order\' data-order="0" style="display: none"><i class=\'feather icon-arrow-down\'></i></a>\n\n                    </div>').appendTo(t)):(t=$('\n                    <li id="'.concat(r.getFileViewSelector(e.id),'" title="').concat(e.nam,'">\n                    <p class="title" style="display:block">\n                        <i class="feather icon-check green _success icon-success"></i>\n                        ').concat(e.name," (").concat(o,")\n                    </p>\n                    </li>\n                ")),i=$('\n<span style="right: 65px;" class="file-action d-none" data-file-act=\'order\' data-order="1"><i class=\'feather icon-arrow-up\'></i></span>\n<span style="right: 45px;" class="file-action d-none" data-file-act=\'order\' data-order="0"><i class=\'feather icon-arrow-down\'></i></span>\n<span style="right: 25px;" class="file-action d-none" data-file-act=\'download\' data-id=\'\'><i class=\'feather icon-download-cloud\'></i></span>\n<span data-file-act="cancel" class="file-action" style="font-size:13px">\n    <i class="feather icon-x red-dark"></i>\n</span>\n<span data-file-act="delete" class="file-action" style="display:none">\n    <i class="feather icon-trash red-dark"></i>\n</span>\n').appendTo(t)),t.appendTo(r.$files),setTimeout((function(){t.css({margin:"5px"})}),50),"invalid"===e.getStatus()?a.showError(t,e.statusText,e):(n&&a.showImage(t,e),r.percentages[e.id]=[e.size,0],e.rotation=0),e.on("statuschange",a.resolveStatusChangeCallback(t,i,e)),(n?i.find("a"):i).on("click",a.resolveActionsCallback(e))}},{key:"showError",value:function(e,t,i){var a=this.uploader.lang,r="",n=$('<p class="error"></p>');switch(t){case"exceed_size":r=a.trans("exceed_size");break;case"interrupt":r=a.trans("interrupt");break;default:r=a.trans("upload_failed")}this.uploader.faildFiles[i.id]=i,n.text(r).appendTo(e)}},{key:"showImage",value:function(e,t){var i=this,a=i.uploader.uploader,r=i.uploader.lang,n=e.find("p.imgWrap"),o=a.makeThumb(t,(function(t,a){var r;if(n.empty(),t)return e.find(".title").show(),void e.find(".file-type").show();i.uploader.helper.isSupportBase64?(r=$('<img src="'+a+'">'),n.append(r)):e.find(".file-type").show()}));try{o.once("load",(function(){t._info=t._info||o.info(),t._meta=t._meta||o.meta();var e=t._info.width,n=t._info.height;if(!i.validateDimensions(t))return Dcat.error(r.trans("dimensions")||"The image dimensions is invalid."),a.removeFile(t),!1;o.resize(e,n)}))}catch(e){return setTimeout((function(){a.removeFile(t)}),10)}}},{key:"resolveStatusChangeCallback",value:function(e,t,i){var a=this,r=a.uploader;return function(n,o,l){"progress"===o||"queued"===o&&(t.find('[data-file-act="cancel"]').hide(),t.find('[data-file-act="delete"]').show()),"error"===n||"invalid"===n?(a.showError(e,i.statusText,i),r.percentages[i.id][1]=1):"interrupt"===n?a.showError(e,"interrupt",i):"queued"===n?r.percentages[i.id][1]=0:"progress"===n?a.removeError(e):"complete"===n&&(a.uploader.isImage()?e.append('<span class="success"><em></em><i class="feather icon-check"></i></span>'):e.find("._success").show()),e.removeClass("state-"+o).addClass("state-"+n)}}},{key:"resolveActionsCallback",value:function(e){var t=this.uploader,i=t.uploader,a=t.helper;return function(){switch($(this).data("file-act")){case"cancel":return void i.removeFile(e);case"deleteurl":case"delete":if(t.options.removable)return t.input.delete(e.serverId),i.removeFile(e);t.request.delete(e,(function(){t.input.delete(e.serverId),i.removeFile(e)}));break;case"preview":Dcat.helpers.previewImage($(this).parent().parent().find("img").attr("src"),null,e.name);break;case"order":$(this).attr("data-id",e.serverId),a.orderFiles($(this));break;case"download":window.open($(this).attr("data-id"))}}}},{key:"removeError",value:function(e){e.find(".error").remove()}},{key:"validateDimensions",value:function(e){var t=this.uploader,i=t.options,a=i.dimensions,r=e._info.width,n=e._info.height,o=Dcat.helpers.isset;return!(t.isImage()&&this.isImage(e)&&Dcat.helpers.len(i.dimensions)&&(o(a,"width")&&a.width!=r||o(a,"min_width")&&a.min_width>r||o(a,"max_width")&&a.max_width<r||o(a,"height")&&a.height!=n||o(a,"min_height")&&a.min_height>n||o(a,"max_height")&&a.max_height<n||o(a,"ratio")&&a.ratio!=r/n))}},{key:"isImage",value:function(e){return e.type.match(/^image/)}}])&&f(t.prototype,i),a&&f(t,a),Object.defineProperty(t,"prototype",{writable:!1}),e}();function v(e){return v="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},v(e)}function h(e,t){for(var i=0;i<t.length;i++){var a=t[i];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,(r=a.key,n=void 0,n=function(e,t){if("object"!==v(e)||null===e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var a=i.call(e,t||"default");if("object"!==v(a))return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(r,"string"),"symbol"===v(n)?n:String(n)),a)}var r,n}var y=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.uploader=t,this.uploadedFiles=[],this.init=!1}var t,i,a;return t=e,(i=[{key:"render",value:function(e){var t=this,i=t.uploader,a=i.options,r=i.isImage(),n="";n+="<li title='"+e.serverPath+"'>",!r&&a.sortable&&(n+='\n<p style="right: 65px" class="file-action" data-file-act=\'order\' data-order="1" data-id=\''.concat(e.serverId,"'><i class='feather icon-arrow-up'></i></p>\n<p style=\"right: 45px\" class=\"file-action\" data-file-act='order' data-order=\"0\" data-id='").concat(e.serverId,"'><i class='feather icon-arrow-down'></i></p>\n")),!r&&a.downloadable&&(n+='\n<p style="right: 25px" class="file-action" data-file-act=\'download\' data-id=\''.concat(e.serverUrl,"'><i class='feather icon-download-cloud'></i></p>\n")),r?n+="<p class='imgWrap'><img src='".concat(e.serverUrl,"'></p>"):a.disabled||(n+='<p class="file-action" data-file-act="delete" data-id="'.concat(e.serverId,'"><i class="feather icon-trash red-dark"></i></p>')),n+="<p class='title' style=''><i class='feather icon-check text-white icon-success text-white'></i>",n+=e.serverPath,n+="</p>",r&&(n+="<p class='title' style='margin-bottom:20px;'>&nbsp;</p>",n+="<div class='file-panel' >",a.disabled||(n+="<a class='btn btn-sm btn-white' data-file-act='deleteurl' data-id='".concat(e.serverId,"'><i class='feather icon-trash red-dark' style='font-size:13px'></i></a>")),n+="<a class='btn btn-sm btn-white' data-file-act='preview' data-url='".concat(e.serverUrl,"' ><i class='feather icon-zoom-in'></i></a>"),a.sortable&&(n+="\n<a class='btn btn-sm btn-white' data-file-act='order' data-order=\"1\" data-id='".concat(e.serverId,"'><i class='feather icon-arrow-up'></i></a>\n<a class='btn btn-sm btn-white' data-file-act='order' data-order=\"0\" data-id='").concat(e.serverId,"'><i class='feather icon-arrow-down'></i></a>\n")),n+="</div>"),n+="</li>",n=$(n),r||(n.find(".file-type").show(),n.find(".title").show(),i.$wrapper.css("background","transparent"));var o=function(){var e=$(this).data("id");if(a.removable)return n.remove(),t.removeFormFile(e);i.request.delete({serverId:e},(function(){n.remove(),t.removeFormFile(e)}))};n.find('[data-file-act="deleteurl"]').click(o),n.find('[data-file-act="delete"]').click(o),a.sortable&&n.find('[data-file-act="order"]').click((function(){i.helper.orderFiles($(this))})),a.downloadable&&n.find('[data-file-act="download"]').click((function(){window.open($(this).attr("data-id"))})),n.find('[data-file-act="preview"]').click((function(){var e=$(this).data("url");Dcat.helpers.previewImage(e)})),i.formFiles[e.serverId]=e,i.input.add(e.serverId),i.$files.append(n),r&&(setTimeout((function(){n.css("margin","5px")}),t.init?0:400),t.init=1)}},{key:"reRender",value:function(){for(var e in this.uploadedFiles)this.uploadedFiles[e]&&this.render(this.uploadedFiles[e])}},{key:"removeFormFile",value:function(e){if(e){var t=this.uploader,i=this.uploader,a=t.formFiles[e];t.input.delete(e),delete t.formFiles[e],i&&!a.fake&&i.removeFile(a),t.status.switch("decrOriginalFileNum"),t.status.switch("incrFileNumLimit"),Dcat.helpers.len(t.formFiles)||Dcat.helpers.len(t.percentages)||t.status.switch("pending")}}},{key:"add",value:function(e){e.serverId&&-1===this.uploader.helper.searchUploadedFile(e.serverId)&&this.uploadedFiles.push(e)}}])&&h(t.prototype,i),a&&h(t,a),Object.defineProperty(t,"prototype",{writable:!1}),e}();function b(e){return b="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},b(e)}function g(e,t){for(var i=0;i<t.length;i++){var a=t[i];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,(r=a.key,n=void 0,n=function(e,t){if("object"!==b(e)||null===e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var a=i.call(e,t||"default");if("object"!==b(a))return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(r,"string"),"symbol"===b(n)?n:String(n)),a)}var r,n}!function(e,t){var a=e.Dcat,r=function(){function e(r){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.options=r=t.extend({wrapper:".web-uploader",addFileButton:".add-file-button",inputSelector:"",isImage:!1,preview:[],server:"",updateServer:"",autoUpload:!1,sortable:!1,deleteUrl:"",deleteData:{},thumbHeight:160,elementName:"",disabled:!1,autoUpdateColumn:!1,removable:!1,downloadable:!1,dimensions:{},lang:{exceed_size:"文件大小超出",interrupt:"上传暂停",upload_failed:"上传失败，请重试",selected_files:"选中:num个文件，共:size。",selected_has_failed:'已成功上传:success个文件，:fail个文件上传失败，<a class="retry"  href="javascript:"";">重新上传</a>失败文件或<a class="ignore" href="javascript:"";">忽略</a>',selected_success:"共:num个(:size)，已上传:success个。",dot:"，",failed_num:"失败:fail个。",pause_upload:"暂停上传",go_on_upload:"继续上传",start_upload:"开始上传",upload_success_message:"已成功上传:success个文件",go_on_add:"继续添加",Q_TYPE_DENIED:"对不起，不允许上传此类型文件",Q_EXCEED_NUM_LIMIT:"对不起，已超出文件上传数量限制，最多只能上传:num个文件",F_EXCEED_SIZE:"对不起，当前选择的文件过大",Q_EXCEED_SIZE_LIMIT:"对不起，已超出文件大小限制",F_DUPLICATE:"文件重复",confirm_delete_file:"您确定要删除这个文件吗？"},upload:{formData:{_id:null},thumb:{width:160,height:160,quality:70,allowMagnify:!0,crop:!0,preserveHeaders:!1,type:"image/jpeg"}}},r);var o=this;o.uploader=WebUploader.create(r.upload),o.$selector=t(r.selector),o.updateColumn=r.upload.formData.upload_column||"webup"+a.helpers.random(),o.relation=r.upload.formData._relation;var l=new i(this),u=new n(this),d=new c(this),p=new m(this),f=new y(this),v=new s(this);o.helper=l,o.request=u,o.status=d,o.addFile=p,o.addUploadedFile=f,o.input=v,o.lang=a.Translator(r.lang),o.percentages={},o.faildFiles={},o.formFiles={},o.fileCount=0,o.fileSize=0,void 0!==r.upload.formData._id&&r.upload.formData._id||(r.upload.formData._id=o.updateColumn+a.helpers.random())}var r,o,l;return r=e,(o=[{key:"build",value:function(){var e=this,i=e.uploader,r=e.options,n=e.$selector.find(r.wrapper),o=t('<ul class="filelist"></ul>').appendTo(n.find(".queueList")),l=n.find(".statusBar"),s=l.find(".info"),u=n.find(".upload-btn"),d=n.find(".placeholder"),c=l.find(".upload-progress").hide();e.$wrapper=n,e.$files=o,e.$statusBar=l,e.$uploadButton=u,e.$placeholder=d,e.$progress=c,e.$infoBox=s,r.upload.fileNumLimit>1&&!r.disabled&&i.addButton({id:r.addFileButton,label:'<i class="feather icon-folder"></i> &nbsp;'+e.lang.trans("go_on_add")}),e.uploader.on("dndAccept",(function(e){for(var t=!1,i=e.length,a=0;a<i;a++)if(~"text/plain;application/javascript ".indexOf(e[a].type)){t=!0;break}return!t})),i.onUploadProgress=function(t,i){e.percentages[t.id][1]=i,e.status.updateProgress()},i.onFileQueued=function(t){e.fileCount++,e.fileSize+=t.size,1===e.fileCount&&(d.addClass("element-invisible"),l.show()),e.addFile.render(t),e.status.switch("ready"),e.status.updateProgress(),!r.disabled&&r.autoUpload&&i.upload()},i.onFileDequeued=function(t){e.fileCount--,e.fileSize-=t.size,e.fileCount||a.helpers.len(e.formFiles)||e.status.switch("pending"),e.removeUploadFile(t)},i.on("all",(function(t,i,a){switch(t){case"uploadFinished":e.status.switch("confirm"),e.request.update();break;case"startUpload":e.status.switch("uploading");break;case"stopUpload":e.status.switch("paused");break;case"uploadAccept":if(!1===e._uploadAccept(i,a))return!1}})),i.onError=function(t){switch(t){case"Q_TYPE_DENIED":a.error(e.lang.trans("Q_TYPE_DENIED"));break;case"Q_EXCEED_NUM_LIMIT":a.error(e.lang.trans("Q_EXCEED_NUM_LIMIT",{num:r.upload.fileNumLimit}));break;case"F_EXCEED_SIZE":a.error(e.lang.trans("F_EXCEED_SIZE"));break;case"Q_EXCEED_SIZE_LIMIT":a.error(e.lang.trans("Q_EXCEED_SIZE_LIMIT"));break;case"F_DUPLICATE":a.warning(e.lang.trans("F_DUPLICATE"));break;default:a.error("Error: "+t)}},u.on("click",(function(){var a=e.status.state;if(t(this).hasClass("disabled"))return!1;"ready"===a||"paused"===a?i.upload():"uploading"===a&&i.stop()})),s.on("click",".retry",(function(){i.retry()})),s.on("click",".ignore",(function(){for(var t in e.faildFiles)i.removeFile(t,!0),delete e.faildFiles[t]})),e.status.switch("init")}},{key:"_uploadAccept",value:function(e,t){var i=this,a=i.options;if(!t||!t.status)return i.helper.showError(t),i.faildFiles[e.file.id]=e.file,!1;if(!t.data||!t.data.merge){e.file.serverId=t.data.id,e.file.serverName=t.data.name,e.file.serverPath=t.data.path,e.file.serverUrl=t.data.url||null,i.addUploadedFile.add(e.file),i.input.add(t.data.id);var r=i.getFileView(e.file.id);if(i.isImage()||(r.find(".file-action").hide(),r.find('[data-file-act="delete"]').show()),a.sortable&&r.find('[data-file-act="order"]').removeClass("d-none").show(),a.downloadable){var n=r.find('[data-file-act="download"]');n.removeClass("d-none").show(),n.attr("data-id",e.file.serverUrl)}}}},{key:"preview",value:function(){var e,t=this,i=t.options;for(e in i.preview){var a=i.preview[e].path,r=void 0;a.indexOf(".")&&(r=a.split(".").pop());var n={serverId:i.preview[e].id,serverUrl:i.preview[e].url,serverPath:a,ext:r,fake:1};t.status.switch("incrOriginalFileNum"),t.status.switch("decrFileNumLimit"),t.addUploadedFile.render(n),t.addUploadedFile.add(n)}}},{key:"reRenderUploadedFiles",value:function(){this.$files.html(""),this.addUploadedFile.reRender()}},{key:"refreshButton",value:function(){this.uploader.refresh()}},{key:"getFileViewSelector",value:function(e){return this.options.elementName.replace(/[\[\]]*/g,"_")+"-"+e}},{key:"getFileView",value:function(e){return t("#"+this.getFileViewSelector(e))}},{key:"removeUploadFile",value:function(e){var t=this,i=t.getFileView(e.id);delete t.percentages[e.id],t.status.updateProgress(),i.off().find(".file-panel").off().end().remove()}},{key:"getColumn",value:function(){return this.updateColumn}},{key:"isImage",value:function(){return this.options.isImage}}])&&g(r.prototype,o),l&&g(r,l),Object.defineProperty(r,"prototype",{writable:!1}),e}();a.Uploader=function(e){return new r(e)}}(window,jQuery)})();