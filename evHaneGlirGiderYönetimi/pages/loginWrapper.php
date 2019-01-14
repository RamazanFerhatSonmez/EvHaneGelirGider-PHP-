<script>
                    $(function() {
                        $("#kategori").change(function() {
                            var id = $(this).val();
                            $.ajax({
                                type: "POST",
                                url: "ajax.php?islem=sabit",
                                data: "kategori="+id,
                                cache: false,
                                success: function(sonuc){
                                    if (sonuc != "0.00") {
                                        $("#tutar").val(sonuc);
                                    }
                                }
                            });
                        });
                        $("#taksit, #tutar").change(function() {
                            var tutar = $("#tutar").val();
                            var taksit = $("#taksit").val();
                            if (taksit == "") {
                                $("#taksit_sonuc").html("");
                            }else{
                                $("#taksit_sonuc").html("<strong>Hesaplanıyor...</strong>");
                                $.ajax({
                                    type: "POST",
                                    url: "ajax.php?islem=taksithesapla",
                                    data: "tutar="+tutar+"&taksit="+taksit,
                                    cache: false,
                                    success: function(sonuc){
                                        if (sonuc != "") {
                                            $("#taksit_sonuc").html(sonuc);
                                        }
                                    }
                                });
                            }
                        });
                        $("#odemeTuru").change(function() {
                            var val = $(this).val();
                            if (val != "") {
                                $("#taksit option[value=1]").attr("selected","selected").change();
                            }
                        });
                    });
                    </script>
    </body>
</html>