<?
$version="v2.0";
$regex=1; // 1 (on) | 0 (off) >> web interface input validation.
$regex_extra=" _-.[]*"; // extra characters allowed (input validation).
$io_in_iface_extra="-";
$iface_supplicant="wlan0";
$supplicant_ssid="";
$supplicant_psk="";
$hostapd_ssid="FruityWifi";
$hostapd_secure="0";
$hostapd_wpa_passphrase="FruityWifi";
$url_rewrite_program="pasarela_xss.js";
//------
$io_mode="1";
$io_in_iface="wlan0";
$io_in_set="1";
$io_in_ip="10.0.0.1";
$io_in_mask="255.255.255.0";
$io_in_gw="";
$io_out_iface="eth0";
$io_out_set="0";
$io_out_ip="192.168.0.1";
$io_out_mask="255.255.255.0";
$io_out_gw="192.168.0.1";

$ap_mode="1";
$io_action="wlan0";
?>
