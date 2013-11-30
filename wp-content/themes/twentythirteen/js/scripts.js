function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function go_to(url)
{
    img = new Image();
    img.src = url;
}

function Check_Length_Str(MaxLen, field, field_num)
{
	inputStr = field.value;
	strlength = 0;
	var newStr = "";
	for (var i=0; i < inputStr.length; i++)
	{
		var oneChar = inputStr.charAt(i);
		strlength++;
		if (strlength < MaxLen)
		newStr += oneChar;
 	}
 	if (strlength > MaxLen)
	{
 		field.value=newStr;
    	field_num.value = MaxLen;
 	}
	else
	{
		field_num.value = (MaxLen - strlength);
	}
}

function check_links()
{
	if (document.getElementById('rid_insert').value == '')
	{
       	alert('Пожалуйста, выберите рубрику!');
        return false;
	}
	if (document.getElementById('url_insert').value == '' || document.getElementById('url_insert').value == 'http://')
	{
       	alert('Пожалуйста, введите URL!');
        return false;
	}
	else
	{
		if (!document.getElementById('url_insert').value.match(/^(http:\/\/)?([a-z0-9-.]+)*([a-z0-9]{2,})\.([a-z0-9]{2,})/i))
		{
			alert('Пожалуйста, введите правильный URL!'); 
			return false;
		}
	}
	if (document.getElementById('email_insert').value == '')
	{
       	alert('Пожалуйста, введите E-mail!');
        return false;
	}
    else
	{
		if (document.getElementById('email_insert').value.match(/[^a-zA-Z0-9@_.-]/i) || !document.getElementById('email_insert').value.match(/[a-zA-Z0-9+._]+@([a-zA-Z0-9-.]+)+(\.[a-zA-Z]{2,})/i))
		{
			alert('Пожалуйста, введите правильный E-mail!'); 
			return false;
		}
	}
} 

function myrich()
{
	document.getElementById('myrich').style.display='none';
}

function openWIN(URL,WName,w,h,scr)
{
	sw = screen.width-100;
	sh = screen.availHeight-100;
	mtw = (screen.width-w)/2;
	mth = (screen.availHeight-h)/2;
	popup = window.open(URL,WName,"width="+w+",height="+h+",top="+mth+",left="+mtw+",status=no,toolbar=no,scrollbars="+scr+",resizable=no,menubar=no");
	popup.focus();
}

var myWinR;

function openIMG(URL,WName,w,h)
{
	if (myWinR != null && !myWinR.closed) myWinR.close();  
	sw = screen.width-100;
	sh = screen.availHeight-100;
	if (w > sw || h > sh)
	{
		if (w > sw) {w1 = sw;} else {w1 = w+17;}
		if (h > sh) {h1 = sh;} else {h1 = h+17;}
		mtw1 = (screen.width-w1)/2;
		mth1 = (screen.availHeight-h1)/2;
		myWinR = window.open('', WName, "width="+w1+",height="+h1+",top="+mth1+",left="+mtw1+",status=no,toolbar=no,scrollbars=yes,resizable=no,menubar=no");
		myWinR.focus();
	}
	else
	{
		mtw = (screen.width-w)/2;
		mth = (screen.availHeight-h)/2;
    	myWinR = window.open('', WName, "width="+w+",height="+h+",top="+mth+",left="+mtw+",status=no,toolbar=no,scrollbars=no,resizable=no,menubar=no");
		myWinR.focus();
	}
  	myWinR.document.writeln('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><title>Вира-АртСтрой</title></head><body style="margin: 0px;"><a href="javascript:window.close();"><img src='+URL+' border=0 width='+w+' height='+h+' alt="Закрыть окно"></a></body></html>');
}

function bla_bla (fn) {document.getElementById(fn).style.display='none';}

function getBrowserInfo() {
    var t,v = undefined;
   
    if (window.chrome) t = 'Chrome';
    else if (window.opera) t = 'Opera';
    else if (document.all) {
        t = 'IE';
        var nv = navigator.appVersion;
        var s = nv.indexOf('MSIE')+5;
        v = nv.substring(s,s+1);
    }
    else if (navigator.appName) t = 'Netscape';
   
    return {type:t,version:v};
}

function bookmark(a,url,title){
	if (url == '') {var url = window.document.location;}
	if (title == '') {var title = window.document.title;}

    var b = getBrowserInfo();
   
    if (b.type == 'IE' && 9 >= b.version && b.version >= 4) window.external.AddFavorite(url,title);
    else if (b.type == 'Opera') {
        a.href = url;
        a.rel = "sidebar";
        a.title = url+','+title;
        return true;
    }
    else if (b.type == "Netscape") window.sidebar.addPanel(title,url,"");
    else alert("Нажмите CTRL-D, чтобы добавить страницу в закладки.");
    return false;
}

/* Галерея */

function gallery_sh(menu_id,gallery_id_1,gallery_id_2,gallery_name)
{
	$("li[id!='"+menu_id+"']").removeClass("gallery-1-select");
	$("li[id='"+menu_id+"']").addClass("gallery-1-select");

	$("#gallery a[id!='"+gallery_id_1+"'], #gallery a[id!='"+gallery_id_2+"']").removeAttr("rel").fadeOut("fast");
	$("#gallery a[id='"+gallery_id_1+"'], #gallery a[id='"+gallery_id_2+"']").attr("rel",gallery_name).fadeIn("fast");

	$("#gallery p[id='gallery_sa']").hide();
	$("#gallery p[id='gallery_ha']").hide();
}

function gallery_sa(gallery_id)
{
	$("#gallery a[id^='"+gallery_id+"']").fadeIn("slow");
	$("#gallery p[id='gallery_sa']").hide();
	$("#gallery p[id='gallery_ha']").show();
}

function gallery_ha(gallery_id)
{
	$("#gallery a[id^='"+gallery_id+"']").fadeOut("slow");
	$("#gallery p[id='gallery_sa']").show();
	$("#gallery p[id='gallery_ha']").hide();
	
	$("html,body").animate({scrollTop:400},500);
}

/* В процессе */

function gallery_siw(gallery_id)
{
	if ($("#gallery_iw a[id^='"+gallery_id+"']").is(":hidden"))
	{
		$("#gallery_iw a[id^='"+gallery_id+"']").fadeIn("slow");
	}
	else
	{
		gallery_hiw(gallery_id);
	}

	$("#gallery_iw span[id='gallery_hiw']").show();
}

function gallery_hiw(gallery_id)
{
	$("#gallery_iw a[id^='"+gallery_id+"']").fadeOut("slow");
	$("#gallery_iw span[id='gallery_hiw']").fadeOut("slow");
}

/* Любая галерея */

function gallery_shcs(gallery_id,gallery_id_s,gallery_id_h)
{
	$("#gallery_cs span[id='"+gallery_id_s+"']").hide();
	$("#gallery_cs span[id='"+gallery_id_h+"']").show();

	if ($("#gallery_cs a[id^='"+gallery_id+"']").is(":hidden"))
	{
		$("#gallery_cs a[id^='"+gallery_id+"']").fadeIn("slow");
	}
	else
	{
		$("#gallery_cs a[id^='"+gallery_id+"']").fadeOut("slow");
	}
}

/* Папки чертежей */

function gallery_draft_sh(gallery_id)
{
	$(".gallery-2010-draft-folder ul#"+gallery_id).slideToggle("slow");
}

/* Лицензии */

function scrollbar_lic(id1,width1)
{
	$('#scrollbar-lic .overview').html($('#lic-'+id1+'-html').html());
	$('#scrollbar-lic .overview').css("width",width1);

	$('#scrollbar-lic').tinyscrollbar({axis:'x',sizethumb:27});

	$(".scrollbar-menu-lic a[id!='lic-"+id1+"-menu']").removeClass("selected");
	$(".scrollbar-menu-lic a[id='lic-"+id1+"-menu']").addClass("selected");
}

/* */

$(document).ready
(
	function()
	{
		/* */

		$("#umidom_calc").fancybox
		(
			{
				href: '/ajax.php?act=umidom_calc',
				type: 'ajax',
				width: 450,
				height: 290,
				autoSize: false,
				padding: 10,
				margin: 0,
				helpers :
				{
					overlay :
					{
						css :
						{
							'background' : 'rgba(0,0,0,0.5)'
						}
					}
				}
			}
		);



		/* */

		$("a.enc_map_popup").fancybox
		(
			{
				type: 'ajax',
				width: 1040,
				height: 560,
				autoSize: false,
				padding: 0,
				margin: 0,
				closeBtn: false,
				helpers :
				{
					overlay :
					{
						css :
						{
							'background' : 'rgba(255,255,255,0.7)'
						}
					}
				}
			}
		);



		/* */

		$('.gallery-3d div').hover(
			function ()
			{
				$(this).find("em").show();
			},
			function ()
			{
				$(this).parent().find("em").hide();
			}
		);



		/* Tooltip при наведении */

		$('.help-link-oo').hover
		(
			function(){$(this).find('.help-link-window').css({'top':$(this).position().top+14,'left':$(this).position().left-100}).fadeIn(300);},
			function(){$(this).find('.help-link-window').fadeOut(200);}
		);



		/* Tooltip при клике */

		var me,popup;

		$('.help-link').click
		(
			function(event)
			{
				hide_popup();
		
				me = $(this);
		
				popup = me.children('.help-link-window');
		
				$('body').append(popup.show().css({'top':me.offset().top+15,'left':me.offset().left-100}));
				event.stopPropagation();
			}
		);
	
		$(document).click
		(
			function()
			{
				hide_popup();
			}
		);
	
		$('span.help-link .help-link-close').click
		(
			function(event)
			{
				hide_popup();
			}
		);
	
		$('span.help-link .help-link-window').click
		(
			function(event)
			{
				event.stopPropagation();
			}
		);
	
		function hide_popup()
		{
			if (popup)
			{
				popup.hide().appendTo(me);
			}
		}



		/* Обратный звонок */

		$('.phone-callback-2 p').click(function () {$('.phone-callback-2 div').slideToggle("slow");});



		/* Лицензии */

		$('#scrollbar-lic-build').tinyscrollbar({axis:'x',sizethumb:27});
		$('#scrollbar-lic-project').tinyscrollbar({axis:'x',sizethumb:27});
		$('#scrollbar-lic-electro').tinyscrollbar({axis:'x',sizethumb:27});



	}
);