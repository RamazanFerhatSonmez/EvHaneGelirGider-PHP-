                <div class="row" style="margin-bottom: 5px;">
                <h2> Gelir-Gider Ekleme::</h2>
                </div>
                <div class="col-lg-12">
             
                    <script>
                        $(function() {
                            $("#ek_header").html('<div class="col-sm-4" style="margin-top: 5px;"><span class="label label-danger">Ekim Gider 3.265,21 TL</span></div> <div class="col-sm-4" style="margin-top: 10px;"><span class="label label-success">Ekim Gelir 337,38 TL</span></div> <div class="col-sm-4" style="margin-top: 10px;"><span class="label label-default" title="Gelire göre harcama oranı">Harcama Oranı %968</span></div>');
                        });
                    </script>
                            <form role="form" method="post" action="loginUserController.php">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h3>Harcama Tarihi:</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <input type="date" name="harcamaTarihi" id="harcamaTarihi" class="form-control tarih hasDatepicker" placeholder="yıl/ay/gun" value="23/10/2018">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h3>İşlem türü:</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <select name="tur" class="form-control">
                                    <option value="gelir">Gelir</option><option value="gider">Gider</option></select>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h3>Kategori:</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="">Seçim yap</option>
                                    <option value="Belirtilmemis"></option>
                                    <option value="Su FAturasi">Su FAturasi</option>
                                    <option value="Elektrik Faturasi">Elektrik Faturasi</option>
                                    <option value="Dogal Gaz Faturasi">Dogal Gaz Faturasi</option>
                                    <option value="Mutfak Masrafı">Mutfak Masrafı</option>
                                    <option value="Kredi Borcu">Kredi Borcu</option>
                                    <option value="Kisisel Masraf">Kisisel Masraf</option>
                                    <option value="Giyim-Kiyafet">Giyim-Kiyafet</option>
                                    <option value="Aylık Maas">Aylık Maas</option>
                                    <option value="Avans">Avans</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h3>İşlem Tutarı:</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <input type="number" name="tutar" id="tutar" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h3>Açıklama:</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <textarea name="aciklama" class="form-control" onkeyup="this.value=this.value.buyukHarf()" placeholder="Bir açıklama giriniz" style="height: 90px;"></textarea>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-lg-12" style="text-align: right;">
                                <button type="submit" class="btn btn-default">Kaydet</button>
                            </div>
                        </div>
                    </form>