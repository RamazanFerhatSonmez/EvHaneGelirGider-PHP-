<?php
session_start();
  $kullaniciAdSoyad = $_SESSION['kullaniciAdSoyad'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ev-Hane Gelir Gider Yönetimi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.docs.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        
        <link rel="stylesheet" type="text/css" href="assets/js/datatable/css/jquery.dataTables.css">
        <script type="text/javascript" language="javascript" src="assets/js/datatable/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/js/datatable/extensions/TableTools/css/dataTables.tableTools.css">
        <script type="text/javascript" language="javascript" src="assets/js/datatable/extensions/TableTools/js/dataTables.tableTools.js"></script>
        
        <script>
            String.prototype.buyukHarf=function() {
                var str = [];
                for(var i = 0; i < this.length; i++) {
                    var ch = this.charCodeAt(i);
                    var c = this.charAt(i);
                    if(ch == 105) str.push('I');
                    else if(ch == 305) str.push('I');
                    else if(ch == 287) str.push('G');
                    else if(ch == 252) str.push('U');
                    else if(ch == 351) str.push('S');
                    else if(ch == 246) str.push('O');
                    else if(ch == 231) str.push('C');
                    else if(ch >= 97 && ch <= 122) str.push(c.toUpperCase());
                    else str.push(c);
                }
                return str.join('');
            }
            
            $(function() {
                $(".tarih").datepicker({ dateFormat: 'dd/mm/yy' });
                
                $.datepicker.regional['tr'] = {
                    closeText: 'kapat',
                    prevText: '&#x3c;geri',
                    nextText: 'ileri&#x3e',
                    currentText: 'bugün',
                    monthNames: ['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran',
                    'Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'],
                    monthNamesShort: ['Oca','Şub','Mar','Nis','May','Haz',
                    'Tem','Ağu','Eyl','Eki','Kas','Ara'],
                    dayNames: ['Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi'],
                    dayNamesShort: ['Pz','Pt','Sa','Ça','Pe','Cu','Ct'],
                    dayNamesMin: ['Pz','Pt','Sa','Ça','Pe','Cu','Ct'],
                    weekHeader: 'Hf',
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''};
                $.datepicker.setDefaults($.datepicker.regional['tr']);
                    
                $(".datatable").DataTable({
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath" : "assets/js/datatable/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                        "aButtons": [
                            "copy",
                            "print",
                            {
                                "sExtends":    "collection",
                                "sButtonText": "Kaydet",
                                "aButtons":    [ "csv", "xls", "pdf" ]
                            }
                        ]
                    }
                });
            });
        </script>
        <style>
             body {
                font: 13px/20px 'Lucida Grande', Tahoma, Verdana, sans-serif;
                color: #404040;
                background: #0ca3d2;
            }
        </style>
        <link href="https://ajax.googleapis.com/ajax/static/modules/gviz/1.0/core/tooltip.css" rel="stylesheet" type="text/css"></head>
        <body>
            <div class="container-fluid">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <h3 style="margin-top: 10px;">Ev-Hane Gelir Gider Yönetimi</h3>
                </div>
                <div style="clear: both;"></div>
            
                <div style="background: #0ca3d2;color: #404040;"  class="panel panel-default">
                    <div class="panel-body">
            
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                 <?php echo "Merhaba $kullaniciAdSoyad" ?> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="ayar-kullanici">Bilgi Güncelle</a></li>
                                <li><a href="logout.php">Güvenli Çıkış</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Menü <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="loginUser.php">Anasayfa</a></li>
                                <li><a href="Gelir.php">Gelirler</a></li>
                                <li><a href="Gider.php">Giderler</a></li>
                            </ul>
                        </div>
                    </div>
                </div>