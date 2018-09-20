 function getcitydetails(fqcn) {

    if (typeof fqcn == "undefined") fqcn = jQuery("#f_elem_city").val();

    cityfqcn = fqcn;

    if (cityfqcn) {

        jQuery.getJSON(
                    "http://gd.geobytes.com/GetCityDetails?callback=?&fqcn="+cityfqcn,
                     function (data) {
                jQuery("#geobytesinternet").val(data.geobytesinternet);
                jQuery("#geobytescountry").val(data.geobytescountry);
                jQuery("#geobytesregionlocationcode").val(data.geobytesregionlocationcode);
                jQuery("#geobytesregion").val(data.geobytesregion);
                jQuery("#geobyteslocationcode").val(data.geobyteslocationcode);
                jQuery("#geobytescity").val(data.geobytescity);
                jQuery("#geobytescityid").val(data.geobytescityid);
                jQuery("#geobytesfqcn").val(data.geobytesfqcn);
                jQuery("#geobyteslatitude").val(data.geobyteslatitude);
                jQuery("#geobyteslongitude").val(data.geobyteslongitude);
                jQuery("#geobytescapital").val(data.geobytescapital);
                jQuery("#geobytestimezone").val(data.geobytestimezone);
                jQuery("#geobytesnationalitysingular").val(data.geobytesnationalitysingular);
                jQuery("#geobytespopulation").val(data.geobytespopulation);
                jQuery("#geobytesnationalityplural").val(data.geobytesnationalityplural);
                jQuery("#geobytesmapreference").val(data.geobytesmapreference);
                jQuery("#geobytescurrency").val(data.geobytescurrency);
                jQuery("#geobytescurrencycode").val(data.geobytescurrencycode);
                }
        );
    }
}