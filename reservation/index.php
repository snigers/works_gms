<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Reservation");
?> 
	  
	  
	  
      <div class="main">
        <div class="page-wrapper">
          <div class="page-header" style="background-image: url(/layout/files/header-bg-reservation.jpg);">
            <div class="page-header-inner">
              <div class="container">
				  <?$APPLICATION->IncludeComponent(
					  "bitrix:breadcrumb",
					  "geo_breadcrumb",
					  Array(
						  "PATH" => "",
						  "SITE_ID" => "s1",
						  "START_FROM" => "0"
					  )
				  );?>
                <h1><?$APPLICATION->ShowTitle();?></h1>
              </div>
            </div>
          </div>
          <div class="page-body page-body-alt">
            <div class="container">
              <div class="page-content page-content-alt">
                <div class="est-form reservation-form">
					<?$APPLICATION->IncludeComponent(
						"bitrix:form.result.new",
						"reservation_client_info",
						Array(
							"CACHE_TIME" => "3600",
							"CACHE_TYPE" => "A",
							"CHAIN_ITEM_LINK" => "",
							"CHAIN_ITEM_TEXT" => "",
							"COMPONENT_TEMPLATE" => ".default",
							"EDIT_URL" => "",
							"IGNORE_CUSTOM_TEMPLATE" => "N",
							"LIST_URL" => "",
							"SEF_MODE" => "N",
							"SUCCESS_URL" => "",
							"USE_EXTENDED_ERRORS" => "N",
							"VARIABLE_ALIASES" => array("WEB_FORM_ID"=>"WEB_FORM_ID","RESULT_ID"=>"RESULT_ID",),
							"WEB_FORM_ID" => "6"
						)
					);?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
 
     

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>