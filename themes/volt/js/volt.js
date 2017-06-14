jQuery.noConflict();
AOS.init();

jQuery('.language-link').each(function(){
  var href = jQuery(this).attr('href');
  var n = href.indexOf('?');
  href = href.substring(0, n != -1 ? n : href.length);
  jQuery(this).attr('href', href);
});


jQuery(document).ready(function(){
  jQuery('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');
  var amountScrolled = 300;

  jQuery(window).scroll(function() {
  	if ( jQuery(window).scrollTop() > amountScrolled ) {
  		jQuery('a.back-to-top').fadeIn('slow').css('left',50+parseInt(jQuery('body').offset().left)+'px');
  	} else {
  		jQuery('a.back-to-top').fadeOut('slow');
  	}
  });

  jQuery('.back-to-top').click(function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
  var station_title = jQuery('.slide_condu_electric .title').text().trim();

  switch(station_title){
    case 'HomeLine':
      jQuery('.block-volt-content').css('background-image','url(http://adrian.wwwebs.eu/themes/volt/images/homeline.png)');
    break;
    case 'BusinessLine':
      jQuery('.block-volt-content').css('background-image','url(http://adrian.wwwebs.eu/themes/volt/images/businessline.png)');
    break;
    case 'PublicLine':
      jQuery('.block-volt-content').css('background-image','url(http://adrian.wwwebs.eu/themes/volt/images/publicline.png)');
    break;
  }
  jQuery('.link_statie_left a').hover(function() {
     jQuery('.link_statie_left img').css('margin-top', '-117px');
  }, function() {
     // on mouseout, reset the background colour
     jQuery('.link_statie_left img').css('margin-top', '-65px');
  });
  jQuery('.link_statie_right a').hover(function() {
     jQuery('.link_statie_right img').css('margin-top', '-110px');
  }, function() {
     // on mouseout, reset the background colour
     jQuery('.link_statie_right img').css('margin-top', '-65px');
  });
  jQuery('.flex-control-nav li a').html('<span></span>');
  jQuery('.flex-control-nav li .flex-active').html('<span></span>');

  jQuery(this).scrollTop(0);
  if (jQuery('h1').is(':empty')){
    jQuery('h1').remove();
  }

  /*language switcher*/
  jQuery( ".navbar .links" ).wrap( "<div class='langs pull-right'></div>" );
  var getData = jQuery(".navbar .text-formatted").addClass('remove').html();
  jQuery(".navbar .remove").remove();

  jQuery('.navbar .langs').prepend(getData);
  jQuery('.block-comutatorlimbi .links li').each(function(){
     lang_name = jQuery(this).attr('hreflang');
     a = jQuery('a',this).text(lang_name);
  });

  /**
  *
  *calcul date masini
  *
  **/
  location.params = function(params) {
    var obj = {}, i, parts, len, key, value;

    if (typeof params === 'string') {
      value = location.search.match(new RegExp('[?&]' + params + '=?([^&]*)[&#$]?'));
      return value ? value[1] : undefined;
    }

    var _params = location.search.substr(1).split('&');

    for (i = 0, len = _params.length; i < len; i++) {
      parts = _params[i].split('=');
      if (! parts[0]) {continue;}
      obj[parts[0]] = parts[1] || true;
    }

    if (typeof params !== 'object') {return obj;}

    for (key in params) {
      value = params[key];
      if (typeof value === 'undefined') {
        delete obj[key];
      } else {
        obj[key] = value;
      }
    }

    parts = [];
    for (key in obj) {
      parts.push(key + (obj[key] === true ? '' : '=' + obj[key]));
    }

    location.search = parts.join('&');
  };

  var lang = jQuery(".langs a.is-active").text().toLowerCase();
   jQuery(document).one('ready', function () {

    if(window.location.href.indexOf("/en/search/content") > -1){
    console.log(location.params('valid'));
      if(location.params('valid') == undefined){
        console.log('in');
        keys = location.params('keys');
        console.log(location.params('valid'));
        location.params({'keys': keys, 'f[0]': 'language%3Aen-gb', 'valid':'valid'});
      }else{
        console.log('out');
      }
    }
    if(window.location.href.indexOf("/ro/search/content") > -1) {
      if(location.params('valid') == undefined){
        console.log('in');
        keys = location.params('keys');
        location.params({'keys': keys, 'f[0]': 'language%3Aro', 'valid':'valid'});
      }else{
        console.log('out');
      }
    }
  });
  if(lang == "en"){
    model = "Model";
    brand = "Brand";
    type = "hours";
    price = '<div><div>Price';
    title = '<div><div>Charging capacity';
    button = '<span><img class="download_image" src="/themes/volt/images/download.png"/></span>Datasheet';
    recomandare = "Suggested charging station";
    acasa = "Home";
    button_filter = 'More Info';
    business = "Business";
    title_masini = "Car specifications";
    timp_incarcare = "Time to fully charge"
    consum_text = "Fuel economy";
    panou = "Info Panel";
  }else{
    model = "Model";
    brand = "Brand";
    type = "ore";
    price = '<div><div>Pret';
    title = '<div><div>Capacitate incarcare';
    button = '<span><img class="download_image" src="/themes/volt/images/download.png"/></span>Date tehnice';
    recomandare = "Recomandare statie de incarcare";
    acasa = "Acasa";
    button_filter = 'Detalii';
    business = "Business";
    title_masini = "Specificatii masina";
    timp_incarcare = "Timp de incarcare (0 - 100%)"
    consum_text = "Consum/100km";
    panou = "Panou Informare";
  }
  /* create menus for accessories */
  jQuery('.accessories .acc_menus div.panou').text(panou);

  jQuery('.accessories article .accesoriu_individual').each(function(i,val) {
      id = jQuery(this).attr('id');
      name = jQuery(this).find('.title').text();
      jQuery('.acc_menus ul').append('<li class="acc_item"><a href="#'+ id +'">'+name+'</a></li>');
  });
  jQuery('.accessories .acc_menus_container').hide();

  jQuery('#side-menu').hover(function(){
    jQuery('.panou').toggle();
    jQuery('.accessories .acc_menus_container').toggle();
  });

  jQuery('#side-menu .acc_item a').click(function(event){
    event.preventDefault();
    href_val = jQuery(this).attr('href');
    jQuery('#side-menu .acc_item a').removeClass('active');
    jQuery(this).addClass('active');

    jQuery('.accesorii article .accesoriu_individual').hide();
    document.location.href = href_val;
    window.location.href = window.location.href;
    jQuery(href_val).fadeIn();
  });

  var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel" //FF doesn't recognize mousewheel as of FF3.x

  jQuery('.accesoriu_individual').parent().addClass('acc_slides');
  var $currentElement = jQuery(".acc_slides").first();
  jQuery('.accessories .acc_menus').bind(mousewheelevt, function(e){

      var evt = window.event || e //equalize event object
      evt = evt.originalEvent ? evt.originalEvent : evt; //convert to originalEvent if possible
      var delta = evt.detail ? evt.detail*(-40) : evt.wheelDelta //check for detail first, because it is used by Opera and FF
      evt.preventDefault();
      if(delta > 0) {
        console.log('up');
        var $nextElement = $currentElement.prev('.acc_slides');

        href_val = jQuery($nextElement).find('.accesoriu_individual').attr('id');
        console.log(href_val);
        // Check if next element actually exists
        if($nextElement.length) {
          $currentElement = $nextElement;
          jQuery('#side-menu .acc_item a').each(function(){
            vals = jQuery(this).attr('href');
            if(vals == '#'+href_val){
                jQuery(this).trigger('click');
                jQuery('#side-menu .acc_item a').removeClass('active');
                jQuery(this).addClass('active');
            }
          });
        }
        return false;
      }else{
        console.log('down');
        var $prevElement = $currentElement.next('.acc_slides');
        href_val = jQuery($prevElement).find('.accesoriu_individual').attr('id');
        console.log(href_val);
        // Check if next element actually exists
        if($prevElement.length) {
          $currentElement = $prevElement;
          jQuery('#side-menu .acc_item a').each(function(){
            vals = jQuery(this).attr('href');
            if(vals == '#'+href_val){
                jQuery(this).trigger('click');
                jQuery('#side-menu .acc_item a').removeClass('active');
                jQuery(this).addClass('active');
            }
          });
        }
        return false;
      }
  });

  var hash = window.location.hash;
  if(hash){
    jQuery(hash).slideDown();
    jQuery('#side-menu .acc_item a').each(function(){
      vals = jQuery(this).attr('href');
      if(vals == hash){
          jQuery('#side-menu .acc_item a').removeClass('active');
          jQuery(this).addClass('active');
      }
    });
    jQuery('html, body').animate({
       scrollTop: jQuery(hash).offset().top - 300
    }, 500);
  }
  /* end create menus accessories*/

  jQuery('.title_masini').html(title_masini);
  jQuery('.timp_incarcare_title').text(timp_incarcare);
  jQuery('.consum_title').text(consum_text);

  var right_arg = jQuery('.link_statie_right a').text();
  var left_arg = jQuery('.link_statie_left a').text();
  jQuery('.link_statie_right a').html('<span class="text_block">'+right_arg+'<span>');
  jQuery('.link_statie_left a').html('<span class="text_block">'+left_arg+'<span>');

  jQuery('#date_tehnice a').attr('target','_blank').html(button);

  var baterie = parseInt(jQuery('.baterie .item').attr('content'));
  var cap_max_incarcare = jQuery('.capacitate_maxima_incarcare .item').attr('content');
  var autonomie = parseInt(jQuery('.autonomie .item').attr('content'));
  var pret = parseFloat(jQuery('#pret_kwh').val());

  var timp_incarcare = (Math.round(((parseInt(baterie)/parseFloat(cap_max_incarcare))*2))/2).toFixed(1);
  if(timp_incarcare % 1 == 0){
    timp_incarcare=parseInt(timp_incarcare,10);
  }else{
    timp_incarcare = (Math.round(((parseInt(baterie)/parseFloat(cap_max_incarcare))*2))/2).toFixed(1);
  }

  var consum = (Math.round((((parseInt(baterie)/parseInt(autonomie))*100)*2))/2).toFixed(1);
  if(consum % 1 == 0){
    consum=parseInt(consum,10);
  }else{
    consum = (Math.round((((parseInt(baterie)/parseInt(autonomie))*100)*2))/2).toFixed(1);
  }

  var incarcare_km = (Math.round(((autonomie/baterie*cap_max_incarcare)*2))/2).toFixed(1);
  if(incarcare_km % 1 == 0){
    incarcare_km=parseInt(incarcare_km,10);
  }else{
    incarcare_km = (Math.round(((autonomie/baterie*cap_max_incarcare)*2))/2).toFixed(1);
  }

  var pret_consum = (Math.round(((((baterie*pret)/autonomie)*100)*2))/2).toFixed(1);
  if(pret_consum % 1 == 0){
    pret_consum=parseInt(pret_consum,10);
  }else{
    pret_consum = (Math.round(((((baterie*pret)/autonomie)*100)*2))/2).toFixed(1);
  }

  jQuery('#timp_incarcare').html(timp_incarcare + ' ' + type);
  jQuery('.capacitate_maxima_incarcare .item').append(' sau '+incarcare_km+' km');
  jQuery('#consum').html(consum +' kWh/100km');
  jQuery('.pret_kwh').html(price + ' </div><div class="item">' + pret_consum +' RON/100km</div></div>');
  jQuery('.baterie .item').append(' '+jQuery('#tip_baterie').text());
  jQuery('#tip_baterie').text('');

  tip_masina = jQuery('.tip_masina .item').text();
  if(lang == 'en'){
    if(tip_masina == 'All-electric'){
      jQuery('#prompt').html('<p>Under ideal circumstances, the car reaches '+autonomie+' kilometers fully powered by electricity. Cold temperatures and driving habits may affect the electric range.</p><p>The price costs for driving 100 km has been calculated with a price '+pret+' lei / kWh. This price can vary from one energy distributer to another or by the charging tariff set up by the charging station owner.</p>');
    }else{
      jQuery('#prompt').html('<p>Under ideal circumstances, the car reaches '+autonomie+' kilometers fully powered by electricity. Cold temperatures and driving habits may affect the electric range.</p><p>The price costs for driving 100 km has been calculated with a price '+pret+' lei / kWh. This price can vary from one energy distributer to another or by the charging tariff set up by the charging station owner.</p>');
    }
  }else{
    if(tip_masina == 'electrica'){
      jQuery('#prompt').html('<p>In conditii ideale, masina poate parcurge pana la '+autonomie+' km. Stilul de condus si temperaturile scazute pot afecta autonomia.</p><p> Costul consumului pentru 100 km a fost calculat considerand un pret de '+pret+' lei per kWh. Acesta poate varia in functie de furnizorul de energie sau de tariful setat de proprietarul statiei de incarcare.');
    }else{
      jQuery('#prompt').html('<p>In conditii ideale, masina poate parcurge pana la '+autonomie+' km, utilizand doar motorul electric. Stilul de condus si temperaturile scazute pot afecta autonomia.</p><p> Costul consumului pentru 100 km a fost calculat considerand un pret de '+pret+' lei per kWh. Acesta poate varia in functie de furnizorul de energie sau de tariful setat de proprietarul statiei de incarcare.</p>');
    }
  }
  jQuery('.tabs .text_recomandare').html(recomandare);
  jQuery('.tabs .tab_home').html('<a href="#home" class="tab_active" id="tab_home">'+acasa+'</a>');
  jQuery('.tabs .tab_business').html('<a href="#home" id="tab_business">'+business+'</a>');
  var j = 0;
  jQuery('.tab_content .item').each(function(){
    jQuery(this).addClass('tab'+j);
    j++;
  });

  jQuery('.tab_content div .tab0').show();
  jQuery('.tab_content div .tab5').hide();
  jQuery('.tab0 .capacitate_incarcare').html(cap_max_incarcare+' kWh');
  if(cap_max_incarcare > 11){
    jQuery('.tab5 .capacitate_incarcare').html(' x 22 kWh');
  }else{
    jQuery('.tab5 .capacitate_incarcare').html(' x 11 kWh');
  }
  jQuery('#tab_business').click(function(){
    jQuery('.tab_content div .tab0').hide();
    jQuery('.tab_content div .tab5').show();
    jQuery('#tab_home').removeClass('tab_active');
    jQuery(this).addClass('tab_active');
  });

  jQuery('#tab_home').click(function(){
    jQuery('.tab_content div .tab0').show();
    jQuery('.tab_content div .tab5').hide();
    jQuery('#tab_business').removeClass('tab_active');
    jQuery(this).addClass('tab_active');
  });

/** end calcul date masini
*
**/
  image_model = '<span class="img_model"><img src="http://adrian.wwwebs.eu/themes/volt/images/model.png"/></span>';
  image_brand = '<span class="img_brand"><img src="http://adrian.wwwebs.eu/themes/volt/images/brand.png"/></span>';
  jQuery('.block-views-block-taxonomy-filter-block-1 ul').wrap('<div class="filter_cars"></div>');
  current_model = '<span class="model_text">'+ model +'</span>';
  current_brand = '<span class="brand_text">' + brand +'</span>';
  jQuery('.filter_cars').hide();
  jQuery('.block-views-block-taxonomy-filter-block-1 ul').addClass('brand');
  if(jQuery('#page_layout').hasClass('masini')){

    brand_text = readCookie('brand_text');
    model_text = readCookie('model_text');
    jQuery('.statie_brand').html(brand_text);
    jQuery('.statie_model').html(model_text);
    if(model_text&&brand_text){
      jQuery('.block-views-block-taxonomy-filter-block-1').prepend('<button id="brand"><div class="views-field views-field-name"><span class="field-content">' + brand_text + '</span></div><div class="views-field views-field-field-audi"><div class="field-content image_brand_data"><img src="'+readCookie('brand_image')+'"/></div></div></button>');
      jQuery('.block-views-block-taxonomy-filter-block-1').prepend('<button id="model"><div class="views-field views-field-name"><span class="field-content">' + model_text + '</span></div><div class="views-field views-field-field-audi"><div class="field-content image_model_data"><img src="'+readCookie('model_image')+'"/></div></div></button>');
    }else{
      jQuery('.block-views-block-taxonomy-filter-block-1').prepend('<button id="brand">' + current_brand + '</button>');
      jQuery('.block-views-block-taxonomy-filter-block-1').prepend('<button id="model">' + current_model + '</button>');
    }
    jQuery.ajax({
      url: "/"+ lang +"/car_model",
      context: document.body
    }).done(function(data) {

      for(i=0; i<data.length;){
        producator = data[i].field_producator;
        imagine = data[i].field_imagine_masina;
        nume = data[i].car;
        path = data[i].path;
        langcode = data[i].langcode;
        //if(langcode == lang.toUpperCase()){
          if(JSON.stringify(brand_text) == JSON.stringify(producator)){
            jQuery('.block-views-block-taxonomy-filter-block-1 ul.model').append('<li class="'+nume+'" data-text="'+path+'"><div class="views-field views-field-name"><span class="field-content">'+nume+'</span></div><div class="views-field views-field-field-'+producator+'"><div class="field-content">'+imagine+'</div></div></li>');
          }
        //}
        i++;
      }
    });
    jQuery('#brand .image_brand_data').hide();
    jQuery('#model .image_model_data').hide();
  }else{
    jQuery('.block-views-block-taxonomy-filter-block-1').prepend('<button id="model">' + current_model + image_model + '</button>');
    jQuery('.block-views-block-taxonomy-filter-block-1').prepend('<button id="brand">' + current_brand + image_brand + '</button>');
  }


  jQuery('.block-views-block-taxonomy-filter-block-1').append('<div class="filter_cars_model"><ul class="model"></ul></div>');
  jQuery('.block-views-block-taxonomy-filter-block-1').append('<a id="search_car">'+button_filter+'</a>');
  jQuery('.filter_cars_model').hide();

  flag=0;

  jQuery('#brand').on('click',function(){
    jQuery('.block-views-block-taxonomy-filter-block-1 .filter_cars_model').hide();
    jQuery('.block-views-block-taxonomy-filter-block-1 .filter_cars').toggle();
    jQuery(this).css('background','#fff').css('color','#676767');
    jQuery('.image_brand_data',this).show();
    /*if(jQuery('.masini .brand li').hasClass('active_brand')){
      jQuery('.masini #brand').css('background','#fff');
    }else if(!jQuery('.masini .brand li').hasClass('active_brand')){
      jQuery('.masini #brand').css('background','rgba(0, 0, 0, 0.7)').css('color','#fff');
    }
    jQuery('.masini #brand').css('background','#fff');*/
  });

  jQuery('#model').click(function(){
    jQuery('.block-views-block-taxonomy-filter-block-1 .filter_cars').hide();
    jQuery('.block-views-block-taxonomy-filter-block-1 .filter_cars_model').toggle();
    jQuery(this).css('background','#fff').css('color','#676767');
    jQuery('.image_model_data',this).show();
    /*if(jQuery('.masini .model li').hasClass('active_model')){
      jQuery('.masini #model').css('background','#fff');
    }else if(!jQuery('.masini .model li').hasClass('active_model')){
      jQuery('.masini #model').css('background','rgba(0, 0, 0, 0.7)').css('color','#fff');
    }*/
  });

  jQuery('.block-views-block-taxonomy-filter-block-1 .brand li').click(function(){
    var select = jQuery('span', this).text().trim();
    var brand = jQuery(this).html();
    jQuery('#brand').html(brand);

    jQuery(this).addClass('active_brand');
    jQuery('.block-views-block-taxonomy-filter-block-1 .filter_cars').hide();

    if(!jQuery('.page_volt').hasClass('masini')){
      jQuery('#model').html(current_model + image_model);
    }else{
      if(jQuery('.masini .block-views-block-taxonomy-filter-block-1 #model span').text().trim() != 'Model'){
        jQuery('.masini .block-views-block-taxonomy-filter-block-1 #model').html('<span class="model_text">'+model+'</span>').css('background','rgba(0, 0, 0, 0.7').css('color','#fff');
      }else{
        jQuery('.masini .block-views-block-taxonomy-filter-block-1 #model').html('<span class="model_text">'+model+'</span>');
      }
    }
    jQuery('.block-views-block-taxonomy-filter-block-1 .model').html('');
    //jQuery('.block-views-block-taxonomy-filter-block-1 #model').html(current_model + image_model);
    console.log(jQuery('.masini .block-views-block-taxonomy-filter-block-1 #model span').text().trim());

    jQuery('#search_car').css('background','transparent').css('color','#676767').attr('href','#invalid_data').css('box-shadow', 'none');
    jQuery('.masini #search_car').css('background','rgba(0, 0, 0, 0.7').css('color','#fff').attr('href','#invalid_data').css('box-shadow', 'none');
    eraseCookie('brand_text');
    text = jQuery('#brand .views-field-name .field-content').text().trim();
    image = jQuery('#brand .views-field .field-content img').attr('src');
    createCookie('brand_text', text);
    createCookie('brand_image', image);
    jQuery.ajax({
      url: "/"+ lang +"/car_model",
      context: document.body
    }).done(function(data) {

      for(i=0; i<data.length;){
        producator = data[i].field_producator;
        imagine = data[i].field_imagine_masina;
        nume = data[i].car;
        path = data[i].path;
        langcode = data[i].langcode;

        //if(langcode == lang.toUpperCase()){
          if(JSON.stringify(select) == JSON.stringify(producator)){
            jQuery('.block-views-block-taxonomy-filter-block-1 ul.model').append('<li class="'+nume+'" data-text="'+path+'"><div class="views-field views-field-name"><span class="field-content">'+nume+'</span></div><div class="views-field views-field-field-'+producator+'"><div class="field-content">'+imagine+'</div></div></li>');
          }
        //}
        i++;
      }

      jQuery('.block-views-block-taxonomy-filter-block-1 .model li').on('click',function(){
        var car_model = jQuery(this).html();
        jQuery('#model').html(car_model);
        path = jQuery(this).attr('data-text');
        jQuery(this).addClass('active_model');
        jQuery('#model').css('background','rgba(255, 255, 255, 1)').css('color','#676767');
        jQuery('#search_car').attr('href',path);
        jQuery('#search_car').css('background','#7bb024').css('color','#fff').css('box-shadow', '2px 8px 9px 0 #ddd');
        jQuery('.masini #search_car').css('background','#7bb024').css('color','#fff').css('box-shadow', 'none');
        jQuery('#model').css('background','#fff');
        jQuery('.filter_cars_model').hide();
        eraseCookie('model_text');
        text = jQuery('#model .views-field-name .field-content').text().trim();
        image = jQuery('#model .views-field img').attr('src');
        createCookie('model_text', text);
        createCookie('model_image', image);
      });
      jQuery( this ).addClass( "done" );
    });
  });
  var $root = jQuery('html, body');
  jQuery('.masini #search_car').click(function() {
      var href = jQuery(this).attr('href');
      $root.animate({
          scrollTop: jQuery(href).offset().top
      }, 500, function () {
          window.location.hash = href;
      });
      return false;
  });




  /*hide elements*/
  jQuery('.button--ultimenu').remove();
  jQuery('#navbar .clearfix').removeClass('clearfix');
  jQuery('#meniu_produse').hide();
  jQuery('.newsletter .description').hide();
  jQuery('.newsletter label').hide();
  /*interchange elements position*/
  newsletter_button = jQuery('.newsletter .form-actions').html();
  jQuery('.newsletter #edit-mail-wrapper').append(newsletter_button);
  jQuery('.newsletter .form-actions').remove();


  /*header scroll functionality*/
  jQuery(function(){
    jQuery('.header_top').data('size','big');
  });

  jQuery(window).scroll(function(){
    if(jQuery(document).scrollTop() > 0)
  {
      if(jQuery('.header_top').data('size') == 'big')
      {
          jQuery('.header_top').data('size','small');
          jQuery('#header_top').fadeOut(100);
          jQuery('.header_top').stop().animate({
              top:0
          },300);
          jQuery('#block-volt-branding').css('padding','9px 0 10px');
          jQuery('#navbar').css('padding-top',0);
          jQuery('.submenu').css('top',0);
          jQuery('div#block-volt-search').addClass('min_block_search');
          jQuery('div#block-volt-search').removeClass('max_block_search');
      }
  }else{
      if(jQuery('.header_top').data('size') == 'small')
        {
          jQuery('.header_top').data('size','big');
          jQuery('.header_top').stop().animate({
              top:'60px'
          },300);
          jQuery('#block-volt-branding').css('padding','34px 0 35px');
          jQuery('#navbar').css('padding-top','26px');
          jQuery('.submenu').css('top','0px');
          jQuery('#header_top').fadeIn(300);
          jQuery('div#block-volt-search').addClass('max_block_search');
          jQuery('div#block-volt-search').removeClass('min_block_search');
        }
    }

  });
  if(jQuery('.header_top').data('size') == 'big'){
    jQuery('div#block-volt-search').addClass('min_block_search');
    jQuery('div#block-volt-search').removeClass('max_block_search');
  }else{
    jQuery('div#block-volt-search').addClass('max_block_search');
    jQuery('div#block-volt-search').removeClass('min_block_search');
  }
  /* Top header social */
  jQuery('#block-social ul li a').each(function(){
    current = jQuery(this).text();
    switch(current){
      case "Facebook":
        jQuery(this).addClass('facebook');
        jQuery(this).html('<span class="facebook_header"></span>');
      break;
      case "Twitter":
        jQuery(this).addClass('twitter');
        jQuery(this).html('<span class="twitter_header"></span>');
      break;
      case "Instagram":
        jQuery(this).addClass('instagram');
        jQuery(this).html('<span class="instagram_header"></span>');
      break;
    }
  });

  /* Footer social */

  jQuery('.social_footer ul li a').each(function(){
    current = jQuery(this).text();
    switch(current){
      case "Facebook":
        jQuery(this).addClass('facebook').html('<span class="facebook_footer"></span>');
      break;
      case "Twitter":
        jQuery(this).addClass('twitter').html('<span class="twitter_footer"></span>');
      break;
      case "Instagram":
        jQuery(this).addClass('instagram').html('<span class="instagram_footer"></span>');
      break;
    }
  });

  jQuery('#navbar .navbar-main li a').each(function(){
    var label_value = jQuery(this).attr('class');
    current_click = jQuery(this);
    /*open submenu*/
    jQuery(this).click(function(e){
      e.preventDefault();
        ids = '#'+jQuery.trim(label_value).split("is-active").join("").toLowerCase();
        hide_all(ids);
        jQuery('#navbar ul li a').removeClass('is_focused');
        jQuery(this).addClass('is_focused');
        if(jQuery(ids).is(":hidden")){
            jQuery(this).removeClass('is_focused');
        }
        if (jQuery(window).width() > 687) {
         jQuery('#close_alege_electric').hide();
         jQuery('#close_produse').hide();
         jQuery('#close_centru_de_informare').hide();
         jQuery('#close_despre_noi').hide();
        }
    });

    brand_c = readCookie('brand_text');
    model_c = readCookie('model_text');
    if(brand_c && model_c){
      jQuery('.masini #search_car').attr('href','#invalid_data');
    }

    var flag = "1";
    jQuery('.navbar').click(function(event){
        flag = "0"; // flag 0 means click happened in the area where we should not do any action
    });
    jQuery('.block-views-block-taxonomy-filter-block-1').click(function(event){
      flag = "0";
    });
    jQuery('html').click(function() {
        if(flag != "0"){
          jQuery("#alege_electric").hide();
          jQuery("#produse").hide();
          jQuery("#centru_de_informare").hide();
          jQuery("#despre_noi").hide();
          jQuery("#search_block").hide();
          jQuery('#navbar ul li a').removeClass('is_focused');
          jQuery('.filter_cars').hide();
          jQuery('.filter_cars_model').hide();
          jQuery('.search-block-form').removeClass('search-field');
          jQuery('div#block-volt-search').hide("slide", { direction: "right" }, 200);
          jQuery('#search_header').show();

            if(jQuery('.masini .brand li').hasClass('active_brand')){
              jQuery('.masini #brand').css('background','#fff');
            }else if(!jQuery('.masini .brand li').hasClass('active_brand')){
              jQuery('.masini #brand').css('background','rgba(0, 0, 0, 0.7)').css('color','#fff');
            }
            if(jQuery('.masini .model li').hasClass('active_model')){
              jQuery('.masini #model').css('background','#fff');
            }else if(!jQuery('.masini .model li').hasClass('active_model')){
              jQuery('.masini #model').css('background','rgba(0, 0, 0, 0.7)').css('color','#fff');
            }
            jQuery('.image_model_data').hide();
            jQuery('.image_brand_data').hide();
        }else {
            flag = "1";
        }
    });
    /*close submenu*/
    block = '#close_'+jQuery.trim(label_value).split("is-active").join("").toLowerCase();
    close_func(block);
  });
  function close_func(block){
    jQuery(block).bind('click',function(){
      jQuery(this).parent().parent().hide();
      jQuery('#navbar ul li a').removeClass('is_focused');
    });
  }
  function hide_all(ids){
    jQuery(ids).toggle();
    jQuery('.submenu').not(ids).hide();
  }
  jQuery('.search-block-form input[type="search"]').attr('placeholder', 'KEYWORD');
  jQuery('#search_header').bind("click",function(){
    flag = "0";
    jQuery('div#block-volt-search').show("slide", { direction: "right" }, 200);
    jQuery('div#block-volt-search').addClass('search-field');

    var inside = '<a id="search_header_rel">'+jQuery(this).html()+'</a>';
    if(jQuery('div#block-volt-search').hasClass('search-field')){
      if(jQuery('#search_header_rel').html() == undefined){
        jQuery('.search-block-form').prepend(inside);
        jQuery('#search_header_rel').bind('click', function(){
          jQuery('div#block-volt-search').hide("slide", { direction: "right" }, 200);
          jQuery('#search_header').show();
        });
      }else{
        jQuery('#search_header_rel').bind('click', function(){
          jQuery('div#block-volt-search').hide("slide", { direction: "right" }, 200);
          jQuery('#search_header').show();
        });
      }
      jQuery(this).hide();
    }
    if(jQuery('.header_top').data('size') == 'big'){
      jQuery('div#block-volt-search').addClass('max_block_search');
      jQuery('div#block-volt-search').removeClass('min_block_search');
    }else{
      jQuery('div#block-volt-search').addClass('min_block_search');
      jQuery('div#block-volt-search').removeClass('max_block_search');
    }
    jQuery('.submenu').not(jQuery('#search_block')).hide();
    if (jQuery(window).width() > 687) {
      jQuery('#close_search').hide();
    }

  });
});


function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}

jQuery(document).ready(function () {
  border_width = 170;
  border_right = 50;
  tabs_statii = jQuery('.tabs').outerWidth();
  text_recom = jQuery('.masini .text_recomandare').width();
  tab_st = jQuery('.tab_block').width();
  calc = (tabs_statii-text_recom-tab_st-border_right-border_width)/3;
  jQuery('.tab_block').css('margin-left',calc+'px');
  var height = [];
  var heightB = [];
  var $set = jQuery('.item .statie_block .content_statie');
  var $setB = jQuery('.item .statie_block .descriere_statie');
  var len = $set.length;
  var lenB = $setB.length
  $set.each(function(index, element){
    height.push(jQuery(this).height());
    if (index == len - 1) {
      $set.css('min-height',getMax(height)+60+'px');
    }
  });
  $setB.each(function(index, element){
    heightB.push(jQuery(this).height());
    if (index == len - 1) {
      $setB.css('min-height',getMax(heightB)+'px');
    }
  });
  function getMax(height){
    var largest = Math.max.apply(Math, height);
    return largest;
  }
});
