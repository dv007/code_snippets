function number_format(obj) {
    var seperator = ',';
    var tmp = obj.value.replace(',', '');
    for (i = 0; i < 3; i++) {
        tmp = tmp.replace(',', '');
    }
    var counta = 0;
    var resulta = '';
    if (tmp != '' && tmp.length < 12) {
        for (ii = tmp.length - 1; ii >= 0; ii--) {
            if (counta > 2) {
                resulta += seperator;
                counta = 0;
            }
            //alert(tmp[ii]);
            resulta += tmp.charAt(ii);
            counta++;
        }
        tmp = '';

        for (jj = resulta.length - 1; jj >= 0; jj--) {
            tmp += resulta.charAt(jj);
        }
        obj.value = tmp;
    }
}