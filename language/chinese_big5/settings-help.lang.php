<?php // $Revision: 2.0 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2000-2003 by the phpAdsNew developers                  */
/* For more information visit: http://www.phpadsnew.com                 */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/



// Settings help translation strings
$GLOBALS['phpAds_hlp_dbhost'] = "
        請指定您要連接的".$phpAds_dbmsname."資料庫伺服器的主機名.
		";
		
$GLOBALS['phpAds_hlp_dbport'] = "
        請指定您要連接的".$phpAds_dbmsname."資料庫伺服器的連接埠. 
		".$phpAds_dbmsname."伺服器的內定連接埠是<i>".
		($phpAds_productname == 'phpAdsNew' ? '3306' : '5432')."</i>.
		";
		
$GLOBALS['phpAds_hlp_dbuser'] = "
        請指定".$phpAds_productname."用來存取".$phpAds_dbmsname."資料庫伺服器的用戶名.
		";
		
$GLOBALS['phpAds_hlp_dbpassword'] = "
        請指定".$phpAds_productname."用來存取".$phpAds_dbmsname."資料庫伺服器的密碼.
		";
		
$GLOBALS['phpAds_hlp_dbname'] = "
        請指定".$phpAds_productname."在".$phpAds_dbmsname."資料庫伺服器上用來存放數據的資料庫名.
		需要注意的是在資料庫伺服器上此資料庫必須已經存在.
		如果此資料庫不存在的話,".$phpAds_productname."將<b>不會</b>自動創建此資料庫.
		";
		
$GLOBALS['phpAds_hlp_persistent_connections'] = "
        永久連接的使用可以很大的提高".$phpAds_productname."的速度和減小伺服器的負載。 
		但是有一個缺點，如果是一個大訪問量的站點，那麼伺服器的負載會比使用普通連接要增加的快，會很快達到很重的負載。
		使用普通連接還是永久連接要根據你的站點的訪問量和硬件條件來決定。
		如果".$phpAds_productname."使用了太多的資源，您應該先查看這個設置。
		";
		
$GLOBALS['phpAds_hlp_insert_delayed'] = "
        ".$phpAds_dbmsname." 在插入數據的時候要鎖定資料庫。如果站點有很多的訪問者， 
		很可能".$phpAds_productname."必須等待很長的時間才能插入一行新數據，因為資料庫仍然被鎖定。 
		如果你使用延遲插入，你不需要等待，當一段時間之後，如果數據表沒有其他線程使用，此新行會被插入到數據表中。 
		";
		
$GLOBALS['phpAds_hlp_compatibility_mode'] = "
        如果你在整合".$phpAds_productname."與其他第三方產品的時候有問題，此選項可能幫助你打開資料庫的兼容模式。
		如果你正在使用本地調用模式並且資料庫的兼容模式已經打開， 
		".$phpAds_productname."應該保持資料庫連接狀態和".$phpAds_productname."運行前一致。 
		此選項有一些慢（很小）所以內定狀態是關閉的。
		";
		
$GLOBALS['phpAds_hlp_table_prefix'] = "
        如果".$phpAds_productname."使用的資料庫是與其他多個軟件共用,給資料庫加一個前綴是一個比較好的選擇。
		如果你在同一個資料庫中使用".$phpAds_productname."的多個安裝版本，你要保證這個前綴在所有的安裝版本裡是唯一的。
		";
		
$GLOBALS['phpAds_hlp_table_type'] = "
        ".$phpAds_dbmsname."支持多種數據表類型。每種資料庫都有獨有的特徵而且有的能夠很大提高".$phpAds_productname."的運行速度。
		MyISAM是內定的數據表類型並且可以在".$phpAds_dbmsname."的所有安裝版本上使用。其他類型的數據表可能不能在你的伺服器上使用。
		";
		
$GLOBALS['phpAds_hlp_url_prefix'] = "
        ".$phpAds_productname."需要知道它自己在網頁伺服器的位置才能正常工作。你必須提供".$phpAds_productname."安裝目錄的URL地址， 
        例如：  http://www.your-url.com/".$phpAds_productname.".
		";
		
$GLOBALS['phpAds_hlp_my_header'] =
$GLOBALS['phpAds_hlp_my_footer'] = "
        填入網頁的頂文件和底文件的路徑(e.g.: /home/login/www/header.htm)可以在管理員界面的每個頁面上添加頂和底文件。 
        你可以放文本或者html文件(如果你使用在文件中使用html代碼，請不要使用象 &lt;body> or &lt;html>的標記)。
		";
		
$GLOBALS['phpAds_hlp_content_gzip_compression'] = "
		啟用GZIP內容壓縮，會極大的減小每次管理員頁面打開時發送給瀏覽器的數據。 
		PHP版本高於4.0.5並安裝了GZIP附加模塊才能啟用此功能。
		";
		
$GLOBALS['phpAds_hlp_language'] = "
        選擇".$phpAds_productname."使用的內定語言。這個語言將被用作管理員和客戶界面的內定語言。 
        請注意：你可以為從管理員界面為每一個客戶設置不同的語言和是否允許客戶修改他們自己的語言設置。
		";
		
$GLOBALS['phpAds_hlp_name'] = "
        您指定此程序的名字. 此字符串將在管理員和客戶界面的所有頁面上顯示. 
		如果為空(內定),將顯示一個".$phpAds_productname."的圖標.
		";
		
$GLOBALS['phpAds_hlp_company_name'] = "
        這個名字是".$phpAds_productname."發送電子的郵件的時候使用的。
		";
		
$GLOBALS['phpAds_hlp_override_gd_imageformat'] = "
        ".$phpAds_productname."通常要檢測GD庫是否安裝和支持哪種圖片格式. 但是檢測有可能不準確或者錯誤,
		一些版本的PHP不允許檢測支持的圖片格式. 如果".$phpAds_productname."自動檢測圖片格式失敗,
		你可以制定正確的圖片格式. 可能的值:none, png, jpeg, gif.
		";
		
$GLOBALS['phpAds_hlp_p3p_policies'] = "
        如果你想啟用".$phpAds_productname."'P3P隱私策略',你必須打開此選項. 
		";
		
$GLOBALS['phpAds_hlp_p3p_compact_policy'] = "
        縮略策略是和cookie一起發送的. 內定的設置是:'CUR ADM OUR NOR STA NID', 
		允許Internet Explorer 6 接受".$phpAds_productname."使用的cookie.
		您可以更改此設置以符合您自己的隱私聲明.
		";
		
$GLOBALS['phpAds_hlp_p3p_policy_location'] = "
        如果您想使用完整隱私策略,您可以制定策略的位置.
		";
		
$GLOBALS['phpAds_hlp_log_beacon'] = "
		信號燈是小的不可見的圖片,可以放置在廣告顯示的頁面上.如果您打開了此選項,
		".$phpAds_productname."將使用此信號燈來計算廣告顯示的次數. 
		如果您關閉了此選項,廣告的顯示次數將在發送的時候計算, 但是這樣不完全準確, 
		因為一個已經發送的廣告不一定總是顯示在屏幕上. 
		";
		
$GLOBALS['phpAds_hlp_compact_stats'] = "
        傳統上,".$phpAds_productname."使用了相當廣泛的記錄,非常詳細但是對資料庫伺服器要求很高.
		對於一個訪問者很多的站點,這是一個很大的問題. 為了解決這個問題,".$phpAds_productname."也支持一種新的統計方式:
		簡潔統計模式,對資料庫伺服器要求小一些,但是不是很詳細.簡介統計模式統計每小時的訪問數和點擊數,
		如果您需要更詳細的信息,您需要關閉簡潔統計模式.
		";
		
$GLOBALS['phpAds_hlp_log_adviews'] = "
        通常所有的訪問數都被記錄,如果您不想收集訪問數的數據,可以關閉此選項.
		";
		
$GLOBALS['phpAds_hlp_block_adviews'] = "
		如果一個訪問者刷新頁面,每次".$phpAds_productname."都會記錄訪問數. 
		此選項用來保證在您指定的時間間隔內對一個廣告的多次訪問僅記錄一次訪問數.
		如:如果您設置此值為300秒,".$phpAds_productname."僅當5分鐘內此廣告對此訪問者沒有顯示過才記錄該訪問數.
		此選項僅當瀏覽器接受cookies的時候才起作用.
		";
		
$GLOBALS['phpAds_hlp_log_adclicks'] = "
        通常所有的點擊數都被記錄,如果您不想收集點擊數的數據,可以關閉此選項.
		";
		
$GLOBALS['phpAds_hlp_block_adclicks'] = "
		如果一個訪問者點擊一個廣告了多次,每次".$phpAds_productname."都會記錄點擊數.
		此選項用來保證在您指定的時間間隔內對一個廣告的多次點擊僅記錄一次點擊數. 
		如:如果您設置此值為300秒,".$phpAds_productname."僅當5分鐘內此訪問者沒有點擊過此廣告才記錄該點擊數.
		此選項僅當瀏覽器接受cookies的時候才起作用.
		";
			
$GLOBALS['phpAds_hlp_log_source'] = "
		如果您正在廣告調用代碼中使用源參數,您可以把這個信息存到資料庫中,
		這樣您可以在統計數據中看到運行中的不同源參數信息.
		如果您沒有使用源參數或者您不想使用此參數來保存信息,
		您可以安全的關閉此選項.
		";
		
$GLOBALS['phpAds_hlp_geotracking_stats'] = "
		如果您正在使用一個geotargeting資料庫,您可以把地理信息存入資料庫.
		i如果您啟用此選項,您可以在統計數據中看到您的訪問者的地理位置
		和每個廣告在不同國家發佈的情況.
		此選項僅當您使用詳細統計方式的時候才能使用.
		";
		
$GLOBALS['phpAds_hlp_log_hostname'] = "
		如果您想保存每個訪問者的主機名或者IP地址,您可以啟用此選項.
		保存此信息您可以看到那些主機檢索了最多的廣告.
		此選項僅當您使用詳細統計方式的時候才能使用.
		";
		
$GLOBALS['phpAds_hlp_log_iponly'] = "
		保存訪問者的主機名會佔用資料庫很多的空間.
		如果您啟用此選項,".$phpAds_productname."將還是保存主機的信息,
		但是僅保存佔用空間少的IP地址信息.
		如果伺服器不提供主機名或者".$phpAds_productname."設置問題,此選項不可用.
		因為此情況下總是記錄IP地址.
		";
	
$GLOBALS['phpAds_hlp_reverse_lookup'] = "
        	網頁伺服器可以自動檢測到主機名,但是一些情況下此選項是關閉的.
		如果您想在發送限制中使用訪問者的主機名信息和/或保存此統計數據,
		並且伺服器沒有提供此信息,您需要打開此選項.
		反向域名查詢需要一定的時間,可能減慢廣告發送的速度.
		";
		
$GLOBALS['phpAds_hlp_proxy_lookup'] = "
		一些用戶使用代理伺服器來訪問互聯網.在此情況下,".$phpAds_productname."將記錄代理伺服器的IP地址或者主機名,
		而不是用戶的. 如果您啟用此選項,".$phpAds_productname."將查找通過代理伺服器上網的用戶的真實IP地址和主機名. 
		如果不能找到用戶的真實地址,就使用代理伺服器的地址.此選項內定並沒有啟用,因為可能會減慢廣告發送的速度.
		";
				
$GLOBALS['phpAds_hlp_auto_clean_tables'] = 
$GLOBALS['phpAds_hlp_auto_clean_tables_interval'] = "
		如果您啟用此選項,超過您在此選擇框下面指定時間的統計數據將被自動刪除.
		例如,如果您設置為5個星期,那麼5個星期之前的統計數據將被自動刪除.
		";
		
$GLOBALS['phpAds_hlp_auto_clean_userlog'] = 
$GLOBALS['phpAds_hlp_auto_clean_userlog_interval'] = "
		如果您啟用此選項,超過您在此選擇框下面指定時間的用戶記錄將被自動刪除.
		例如,如果您設置為5個星期,那麼5個星期之前的用戶記錄將被自動刪除.
		";
		
$GLOBALS['phpAds_hlp_geotracking_type'] = "
		Geotargeting允許".$phpAds_productname."把訪問者的IP地址轉換成地理信息.
		您可以在此信息的基礎上設置發送限制,或者您可以保存此信息來查看
		哪個國家有最多的廣告發送和點擊率.
		如果您想啟用geotargeting,您需要選擇您現有的資料庫類型.
		".$phpAds_productname."現在支持<a href='http://hop.clickbank.net/?phpadsnew/ip2country' target='_blank'>IP2Country</a> 
		和 <a href='http://www.maxmind.com/?rId=phpadsnew' target='_blank'>GeoIP</a> 資料庫.
		";
		
$GLOBALS['phpAds_hlp_geotracking_location'] = "
		除非您使用GeoIP的Apache模塊, 否則您應該告訴".$phpAds_productname."
		geotargeting資料庫的位置. 強烈推薦把此資料庫放到網頁伺服器的文檔目錄外面,
		否則的話其他人可以直接下載此資料庫.
		";
		
$GLOBALS['phpAds_hlp_geotracking_cookie'] = "
		把IP地址轉換成地理信息需要一定的時間.
		為了防止".$phpAds_productname."在每個廣告發送的時候都進行轉換,
		可以把結果保存在cookie中. 如果這個cookie已經存在,
		".$phpAds_productname."將直接使用此信息而不用再轉換IP.
		";
		

$GLOBALS['phpAds_hlp_ignore_hosts'] = "
        如果您不想記錄特定計算機的訪問數和點擊數,您可以把他們加入此列表. 如果您啟用了反向域名查詢,
		您可以添加域名和IP地址,否則您只能使用IP地址. 您也可以使用通配符(也就是'*.altavista.com'或者'192.168.*').
		";
		
$GLOBALS['phpAds_hlp_begin_of_week'] = "
        對很多人來說星期一是一周的開始,但是您可以設置星期天作為一周的開始.
		";
		
$GLOBALS['phpAds_hlp_percentage_decimals'] = "
        指定顯示統計數據的頁面的數據精確到小數點之後幾位.
		";
		
$GLOBALS['phpAds_hlp_warn_admin'] = "
        如果一個項目只剩下有限的訪問數和點擊數存量,".$phpAds_productname." 能夠發電子郵件來提醒您.此選項內定是打開的.
		";
		
$GLOBALS['phpAds_hlp_warn_client'] = "
        如果一個客戶的某個項目只剩下有限的訪問數和點擊數存量".$phpAds_productname."能夠發電子郵件來提醒客戶.此選項內定是打開的.
		";
		
$GLOBALS['phpAds_hlp_qmail_patch'] = "
		qmail的一些版本因為受到一個bug的影響,造成".$phpAds_productname."發送的電子郵件在郵件的內容裡面顯示郵件頭.
		如果您啟用此選項,".$phpAds_productname."將使用qmail兼容格式來發送電子郵件.
		";
		
$GLOBALS['phpAds_hlp_warn_limit'] = "
        ".$phpAds_productname."開始發送警告電子郵件的閥值,內定是100.
		";
		
$GLOBALS['phpAds_hlp_allow_invocation_plain'] = 
$GLOBALS['phpAds_hlp_allow_invocation_js'] = 
$GLOBALS['phpAds_hlp_allow_invocation_frame'] = 
$GLOBALS['phpAds_hlp_allow_invocation_xmlrpc'] = 
$GLOBALS['phpAds_hlp_allow_invocation_local'] = 
$GLOBALS['phpAds_hlp_allow_invocation_interstitial'] = 
$GLOBALS['phpAds_hlp_allow_invocation_popup'] = "
		這些設置運行您控制允許使用的調用方式.如果某個調用方式停用,將不再出現在調用代碼/廣告代碼產生頁面.
		重要:調用方式如果停用後將繼續工作,就是說原有的代碼還是可以繼續使用,
		只是在產生調用代碼的時候不能使用.
		";
		
$GLOBALS['phpAds_hlp_con_key'] = "
        ".$phpAds_productname."包含一個使用直接選取方式的強大的廣告選擇系統.
		更多詳細的信息請參考用戶手冊. 通過此選項,您可以啟用條件關鍵字.這個選項內定是打開的.
		";
		
$GLOBALS['phpAds_hlp_mult_key'] = "
        如果您正在使用直接選取方式來顯示廣告,您可以為每個廣告指定一個或多個關鍵字.
		絮聒您想指定多個關鍵字,必須啟用此選項.這個選項內定是打開的.
		";
		
$GLOBALS['phpAds_hlp_acl'] = "
        如果您沒有使用發送限制選項,您可以關閉此選項,這將使".$phpAds_productname."速度稍微加快.
		";
		
$GLOBALS['phpAds_hlp_default_banner_url'] = 
$GLOBALS['phpAds_hlp_default_banner_target'] = "
        如果".$phpAds_productname."不能連接到資料庫伺服器,或者不能找到符合的廣告,如資料庫崩潰或者被刪除,
		將不顯示任何東西.一些用戶可能想在這種情況下來顯示一個指定的內定廣告.此指定的內定廣告將不被記錄,
		如果資料庫中仍舊有啟用的廣告,此指定的內定廣告也將不被使用.這個選項內定是關閉的.
		";
			
$GLOBALS['phpAds_hlp_delivery_caching'] = "
		為了幫助提高廣告發送的速度,".$phpAds_productname."使用了緩存,uses a cache which includes all
		緩存中包含了發送一個廣告給你的網站訪問者的所有需要的信息.he information needed to delivery the banner to the visitor of your website. The delivery
		這個發送緩存區內定是存放在資料庫裡,為了進一步提高速度,
		它也可以存放在一個文件或者共享內存中.
		共享內存是最快的,文件也是很快的. 建議不要關閉此緩存區, 
		因為會對性能影響極大.
		";
		
$GLOBALS['phpAds_hlp_type_sql_allow'] = 
$GLOBALS['phpAds_hlp_type_web_allow'] = 
$GLOBALS['phpAds_hlp_type_url_allow'] = 
$GLOBALS['phpAds_hlp_type_html_allow'] = 
$GLOBALS['phpAds_hlp_type_txt_allow'] = "
        ".$phpAds_productname."可以使用不同類型的廣告,用不同的方式存放廣告.頭兩個選項用來在本地存放廣告.
		您可以使用管理員界面來上傳廣告,".$phpAds_productname."將在SQL資料庫或者網頁伺服器上存放廣告.
		你也可以把廣告存放在外部網頁伺服器,或者使用HTML或簡單文字來生成廣告.
		";
		
$GLOBALS['phpAds_hlp_type_web_mode'] = "
        如果您想使用存放在網頁伺服器上的廣告,您需要配置此設置.如果您想在本地目錄存放廣告,把此選項設置為<i>本地目錄</i>.
		如果您想把廣告存放到外邊FTP伺服器上,把此選項設置為<i>外部FTP伺服器</i>.
		在一些特定的網頁伺服器上,您可能甚至想在本地的網頁伺服器上使用FTP選項.
		";
		
$GLOBALS['phpAds_hlp_type_web_dir'] = "
        指定一個目錄,".$phpAds_productname."需要把上傳的廣告複製到此目錄.此目錄PHP必須有寫權限,
		就是說您可能需要修改此目錄的UNIX權限(chmod).指定的目錄必須在網頁伺服器的'文檔根目錄'下,
		網頁伺服器必須可以直接發佈此文件.不要指定結尾的斜線(/).您僅在把存放方式設置為<i>本地目錄</i>時才需要配置此選項.
		";
		
$GLOBALS['phpAds_hlp_type_web_ftp_host'] = "
		如果您設置存放方式為<i>外部FTP伺服器</i>,您需要指定FTP伺服器的IP地址或者域名,以使".$phpAds_productname."
		能夠把上傳的廣告複製到此伺服器上.
		";
      
$GLOBALS['phpAds_hlp_type_web_ftp_path'] = "
		如果您設置存放方式為<i>外部FTP伺服器</i>,您需要指定外部FTP伺服器的目錄,以使".$phpAds_productname."
		能夠把上傳的廣告複製到此目錄.
		";
      
$GLOBALS['phpAds_hlp_type_web_ftp_user'] = "
		如果您設置存放方式為<i>外部FTP伺服器</i>,您需要指定外部FTP伺服器的用戶名,以使".$phpAds_productname."
		能夠連接到外部FTP伺服器.
		";
      
$GLOBALS['phpAds_hlp_type_web_ftp_password'] = "
		如果您設置存放方式為<i>外部FTP伺服器</i>,您需要指定外部FTP伺服器的密碼,以使".$phpAds_productname."
		能夠連接到外部FTP伺服器.
		";
      
$GLOBALS['phpAds_hlp_type_web_url'] = "
        如果您在網頁伺服器上存放廣告,".$phpAds_productname."需要知道下面您指定的目錄的公開的訪問地址.
		不要指定結尾的斜線(/).
		";
		
$GLOBALS['phpAds_hlp_type_html_auto'] = "
        如果打開此選項,".$phpAds_productname."將自動修改HTML廣告代碼以記錄點擊數.
		但是即使此選項打開,仍然可以對每個廣告停用此功能. 
		";
		
$GLOBALS['phpAds_hlp_type_html_php'] = "
        可以使".$phpAds_productname."在HTML廣告代碼中執行PHP代碼,此選項內定是關閉的.
		";
		
$GLOBALS['phpAds_hlp_admin'] = "
        請輸入管理員的用戶名. 通過此用戶名您可以登錄到管理員界面.
		";
		
$GLOBALS['phpAds_hlp_admin_pw'] =
$GLOBALS['phpAds_hlp_admin_pw2'] = "
        請輸入管理員的密碼. 通過此用戶名您可以登錄到管理員界面.您需要輸入兩次以免輸入錯誤.
		";
		
$GLOBALS['phpAds_hlp_pwold'] = 
$GLOBALS['phpAds_hlp_pw'] = 
$GLOBALS['phpAds_hlp_pw2'] = "
        修改舊密碼,您需要在上面輸入舊密碼. 你也需要輸入新密碼兩次,以避免輸入錯誤.
		";
		
$GLOBALS['phpAds_hlp_admin_fullname'] = "
        指定管理員的全名,用來通過電子郵件發送統計報表.
		";
		
$GLOBALS['phpAds_hlp_admin_email'] = "
        管理員的電子郵件地址,用來作為發信人地址通過電子郵件發送統計報表.
		";
		
$GLOBALS['phpAds_hlp_admin_email_headers'] = "
        您可以修改".$phpAds_productname."發送電子郵件的郵件頭.
		";
		
$GLOBALS['phpAds_hlp_admin_novice'] = "
        如果您想在刪除客戶,項目,廣告,發佈者和版位的時候得到一個警告信息,設置此選項為true.
		";
		
$GLOBALS['phpAds_hlp_client_welcome'] = "
		如果打開此選項,每個客戶登錄後的首頁將顯示一個歡迎信息.您可以通過修改admin/templates目錄下的
		welcome.html文件來修改此信息.您可能想要包括的信息如:您公司的名字,聯繫信息,您公司的圖標,一個廣告價格頁面鏈接等.
		";

$GLOBALS['phpAds_hlp_client_welcome_msg'] = "
		代替編輯welcome.html文件,您可以在這裡指定一些文字.如果您在這裡輸入了文字,welcome.html文件將被忽略.
		這裡允許輸入html標記.
		";
		
$GLOBALS['phpAds_hlp_updates_frequency'] = "
		如果您想查看".$phpAds_productname."的版本,您可以啟用此選項.可以指定".$phpAds_productname."連到升級伺服器
		進行升級的時間間隔.如果找到新版本,將彈出包含此次升級信息的一個對話框 
		";
		
$GLOBALS['phpAds_hlp_userlog_email'] = "
		如果您想保存".$phpAds_productname."發送的所有電子郵件信息的一個副本,您可以啟用此選項.電子郵件信息將保存在用戶記錄裡.
		";
		
$GLOBALS['phpAds_hlp_userlog_priority'] = "
		為了保證優先權計算的正確,您可以為每個小時的計算保存一份報表. 這個報表包括預估的情況和每個廣告分配的優先權.
		這個信息在您想提交一個bug報告的時候比較有用. 這個報表存放在用戶記錄裡.
		";
				
$GLOBALS['phpAds_hlp_userlog_autoclean'] = "
		為了保證資料庫正確刪減,
		您可以保存一份關於刪減期間所有發生情況的報告.
		這個信息將保存在用戶記錄中.
		";
		
$GLOBALS['phpAds_hlp_default_banner_weight'] = "
		如果您想使用一個內定更高的廣告權值,您可以在這裡指定您期望的權值.這個選項內定設置為1.
		";
		
$GLOBALS['phpAds_hlp_default_campaign_weight'] = "
		如果您想使用一個內定更高的項目權值,您可以在這裡指定您期望的權值.這個選項內定設置為1.
		";
		
$GLOBALS['phpAds_hlp_gui_show_campaign_info'] = "
		如果打開此選項,每個項目的額外的信息將在<i>項目總覽</i>頁面上顯示. 額外信息包括訪問數的存量,點擊數的存量,
		啟用日期,失效日期和權值設置.
		";
		
$GLOBALS['phpAds_hlp_gui_show_banner_info'] = "
		如果打開此選項,每個廣告的額外的信息將在<i>廣告總覽</i>頁面上顯示. 額外信息包括目標URL,關鍵字,尺寸和權值.
		";
		
$GLOBALS['phpAds_hlp_gui_show_campaign_preview'] = "
		如果打開此選項,<i>廣告總覽</i>頁面將顯示所有廣告的預覽.如果關閉此選項,在<i>廣告總覽</i>頁麵點擊
		每個廣告後面的三角圖標,也可以顯示每個廣告的預覽.
		";
		
$GLOBALS['phpAds_hlp_gui_show_banner_html'] = "
		將顯示實際的HTML廣告,而不是HTML代碼.此選項內定是關閉的,因為HTML廣告可能與用戶的界面衝突.
		如果關閉此選項,點擊HTML代碼後面的<i>顯示廣告</i>按鈕,也可以顯示實際的HTML廣告.
		";
		
$GLOBALS['phpAds_hlp_gui_show_banner_preview'] = "
		如果打開此選項,在<i>廣告屬性</i>,<i>發送選項</i>和<i>連接廣告</i>頁面,將顯示廣告的預覽.
		如果關閉此選項,點擊頁面頂部的<i>顯示廣告</i>按鈕,也可以看到廣告的預覽.
		";
		
$GLOBALS['phpAds_hlp_gui_hide_inactive'] = "
		如果啟用此選項,所有停用的廣告,項目,客戶將在<i>客戶&項目</i>和<i>項目總覽</i>頁面被隱藏. 
		當啟用此選項,您仍舊可以點擊頁面底部的<i>顯示所有</i>按鈕來查看隱藏的條目.
		";
		
$GLOBALS['phpAds_hlp_gui_show_matching'] = "
		如果啟用此選項,然後選定<i>項目選擇</i>模式,
		那麼符合條件的廣告將在<i>連接廣告</i>頁面顯示.
		這允許您準確知道如果鏈接到此項目,那些廣告可以發送.
		您也可以預覽一下符合條件的廣告.
		";
		
$GLOBALS['phpAds_hlp_gui_show_parents'] = "
		如果啟用此選項,然後選定<i>廣告選擇</i>模式,
		廣告的父項目將顯示在<i>連接廣告</i>頁面.
		這允許您知道在此廣告前哪個項目的哪個廣告已經連接了.
		這意味著廣告根據父項目來分組,而不是像以前根據字母順序排序.
		";
		
$GLOBALS['phpAds_hlp_gui_link_compact_limit'] = "
		內定所有可用的廣告和項目都在<i>連接廣告</i>頁面顯示.
		所以如果目錄中有很多不同的可用廣告的話,這個頁面會變的非常長.
		這個選項允許您設置此頁面最多顯示的條目.
		如果有更多條目和不同連接方式,將顯示佔用空間最少的廣告.
		";
		
?>
