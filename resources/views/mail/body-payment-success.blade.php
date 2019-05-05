<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />
    <title>A Simple Responsive HTML Email</title>
    <style type="text/css">
      body {
        margin: 0;
        padding: 0;
        min-width: 100% !important;
      }
      img {
        height: auto;
      }
      .content {
        font-family: roboto;
        width: 100%;
        max-width: 600px;
      }
      .header {
        padding: 5px 10px 5px 10px;
      }
      .innerpadding {
        padding: 30px 10px 30px 10px;
      }
      .borderbottom {
        border-bottom: 1px solid #f2eeed;
      }
      .bordertop {
        border-top: 1.1px solid #f2eeed;
      }
      .subhead {
        font-size: 15px;
        color: #ffffff;
        font-family: roboto;
        letter-spacing: 10px;
      }
      
      .button {
        text-align: center;
        font-size: 18px;
        font-family: roboto;
        font-weight: bold;
        padding: 0 30px 0 30px;
      }
     
      .button a {
        color: #ffffff;
        text-decoration: none;
      }
      .footer {
        padding: 20px 30px 15px 30px;
      }
      .footercopy {
        font-family: roboto;
        font-size: 14px;
        color: #ffffff;
      }
      .footercopy a {
        color: #ffffff;
        text-decoration: underline;
      }

        @media screen and (min-width: 601px) {
            .innerpadding {
                padding: 30px 10px 30px 10px;
            }
            td{
                font-family: roboto;
            }
            .h1 {
                font-size: 30px;
                line-height: 30px;
                font-weight: bold;
                color: #383838;
            }
            .h2 {
                padding: 0 0 15px 0;
                font-size: 22px;
                line-height: 26px;
                font-weight: bold;
                color: #383838;
            }
            .currency {
                font-size: 21px;
                font-weight: bold;
            }
            .judul {
                color: #383838;
                font-size: 14px;
                font-weight: bold;
                line-height: 30px;
            }
            .logo {
                width: 30px;
            }
            .subjudul {
                font-size: 16px;
                font-weight: bold;
                color: #383838;
            }
            .temukan{
                padding: 50px 30px 5px 30px !important;
            }
            .judulcenter {
                font-size: 16px !important;
            }
            td.bodycopy {
                color: #153643;
                font-size: 14px;
                line-height: 22px;
            }
            td.list {
                font-size: 14px !important;
            }
            font.hello {
                font-size: 18px !important;
            }
            font.bold {
                font-size: 14px !important;
                font-weight: bold;
            }
            img.fix {
                width: 70px;
            }
            img.metode {
                width: 110px;
            }
            img.find {
                width: 130px;
            }
            img.imgheader {
                width: 250px;
            }
        }

        @media screen and (max-width: 600px) {
            .innerpadding {
                padding: 20px 10px 20px 10px;
            }
            td{
                font-family: roboto;
            }
            .h1 {
                font-size: 23px;
                line-height: 23px;
                font-weight: bold;
                color: #383838;
            }
            .h2 {
                padding: 0 0 15px 0;
                font-size: 18px;
                line-height: 22px;
                font-weight: bold;
                color: #383838;
            }
            .currency {
                font-size: 14px;
                font-weight: bold;
            }
            .judul {
                color: #383838;
                font-size: 11px;
                font-weight: bold;
            }
            .logo {
                width: 25px;
            }
            .subjudul {
                font-size: 12px;
                font-weight: bold;
                color: #383838;
            }
            .temukan{
                padding: 30px 30px 5px 30px !important;
            }
            .judulcenter {
                font-size: 13px !important;
            }
            td.bodycopy {
                color: #153643;
                font-size: 10px;
                line-height: 14px;
            }
            td.list {
                font-size: 8.5px !important;
            }
            font.hello {
                font-size: 14px !important;
            }
            font.bold {
                font-size: 10px !important;
                font-weight: bold;
            }
            img.metode {
                width: 70px;
            }
            img.fix {
                width: 40px;
            }
            img.find {
                width: 100px;
            }
            img.imgheader {
                width: 170px;
            }
        }

      @media only screen and (max-width: 550px),
        screen and (max-device-width: 550px) {
        body[yahoo] .hide {
          display: none !important;
        }
        body[yahoo] .buttonwrapper {
          background-color: transparent !important;
        }
        body[yahoo] .button {
          padding: 0px !important;
        }
        body[yahoo] .button a {
          background-color: #e05443;
          padding: 15px 15px 13px !important;
        }
        body[yahoo] .unsubscribe {
          display: block;
          margin-top: 20px;
          padding: 10px 50px;
          background: #2f3942;
          border-radius: 5px;
          text-decoration: none !important;
          font-weight: bold;
        }
      }

      /*@media only screen and (min-device-width: 601px) {
    .content {width: 600px !important;}
    .col425 {width: 425px!important;}
    .col380 {width: 380px!important;}
    }*/
    </style>
  </head>

  <body yahoo bgcolor="#f6f8f1">
    <table
      width="100%"
      bgcolor="#f6f8f1"
      border="0"
      cellpadding="0"
      cellspacing="0"
    >
      <tr>
        <td>
          <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td>
    <![endif]-->
          <table
            bgcolor="#ffffff"
            class="content"
            align="center"
            cellpadding="0"
            cellspacing="0"
            border="0"
          >
            <tr>
              <td bgcolor="#2d89d3" class="header">
                <!-- <table width="70" align="left" border="0" cellpadding="0" cellspacing="0">  
            <tr>
              <td height="70" style="padding: 0 20px 20px 0;">
                <img class="fix" src="images/icon.gif" width="70" height="70" border="0" alt="" />
              </td>
            </tr>
          </table> -->

                <!--[if (gte mso 9)|(IE)]>
            <table width="425" align="left" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td>
          <![endif]-->
                <table
                  class="col425"
                  align="left"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  style="width: 100%; max-width: 425px;"
                >
                  <tr>
                    <td height="70">
                      <table
                        width="100%"
                        border="0"
                        cellspacing="0"
                        cellpadding="0"
                      >
                        <!-- <tr>
                    <td class="subhead" style="padding: 0 0 0 3px;">
                      CREATING
                    </td>
                  </tr> -->
                        <tr>
                          <td style="padding: 2px 0 0 5px;">
                             <img
                              class="imgheader"
                              src="{{$logo_cars}}"
                              border="0"
                              alt=""
                            />
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>

                <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
          </table>
          <![endif]-->
              </td>
            </tr>
            <tr>
              <td class="innerpadding" style="padding: 30px 10px 0 10px !important;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="h2" style="padding: 0 30px 10px 25px;">
                      Konfirmasi Pembayaran
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
                <td class="innerpadding">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="h1" style="text-align: center">
                        Pembayaran berhasil!
                        </td>
                    </tr>
                    <tr>
                        <td
                        class="bodycopy judulcenter"
                        style="padding: 30px 20px 5px 20px; text-align: center"
                        >
                        Pembayaran untuk pesanan {{$NoPesanan}} via Transfer Manual telah kami terima! saat ini kami sedang menyiapkan order 
                        tersebut untuk dikirim, silakan cek status pesanan kamu pada menu histori di aplikasi Carsworld
                        </td>
                    </tr>
                    </table>
                </td>
                </tr>
                <!-- <table width="115" align="left" border="0" cellpadding="0" cellspacing="0">  
            <tr>
              <td height="115" style="padding: 0 20px 20px 0;">
                <img class="fix" src="images/article1.png" width="115" height="115" border="0" alt="" />
              </td>
            </tr>
          </table> -->
                <!--[if (gte mso 9)|(IE)]>
            <table width="380" align="left" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td>
          <![endif]-->
                <tr>
                  <td
                    class="innerpadding bodycopy"
                    style="padding: 10px 20px 5px 20px !important;"
                  >
                    <font class="bold"
                      >Nomor Pesanan</font
                    >: {{$NoPesanan}}
                  </td>
                </tr>
                <tr>
                  <td class="innerpadding" style="padding: 5px 10px 10px 10px !important;">
                    <table
                      class="col380"
                      align="left"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      style="width: 100%; max-width: 590px;padding: 5px 10px 5px 10px !important;"
                    >
                      <tr>
                        <td>
                          <table
                            width="100%"
                            border="0"
                            cellspacing="0"
                            cellpadding="0"
                          >
                            <tr>
                              <td
                                colspan="2"
                                bgcolor="#F8F8F8"
                                class="list"
                                style="width: 100px;font-weight: bold;text-align: center;padding: 10px 10px 10px 10px !important;"
                              >
                                Produk
                              </td>
                              <td
                                class="list"
                                bgcolor="#F8F8F8"
                                style="width: 100px;font-weight: bold;text-align: center;padding: 8px 8px 8px 8px !important;"
                              >
                                Est.Pengiriman
                              </td>
                              <td
                                class="list"
                                bgcolor="#F8F8F8"
                                style="width: 100px;font-weight: bold;text-align: right;padding: 8px 8px 8px 8px !important;"
                              >
                                Jumlah Rp.
                              </td>
                            </tr>
                            @foreach($products as $item)
                            <tr>
                              <td
                                style="width: 10%;padding: 2px 2px 2px 2px;"
                              >
                                <img
                                  class="fix"
                                  src="{{$item['feature_image']}}"
                                  width="70"
                                  height="70"
                                  border="0"
                                  alt=""
                                />
                              </td>
                              <td
                                class="list"
                                style="padding: 10px 10px 5px 5px !important; width: 45%"
                              >
                                  <font style="font-weight: bold;color:#434343">{{$item['title']}}</font> <br>
                                  {{$item['catatan']}} <br>
                                  Qty: {{$item['jumlah']}}
                                
                              </td>
                              <td
                                class="list"
                                style="width:100px;font-size: 14px;text-align: center;padding: 0 0 0 0 !important;"
                              >
                                {{$item['estimasi_pengiriman']}}
                              </td>
                              <td
                                class="list"
                                style="font-size: 14px;text-align: right;padding: 8px 8px 8px 8px;"
                              >
                              {{$item['total_harga']}}
                              </td>
                            </tr>
                            @endforeach
                            <tfoot>
                              <tr>
                                <td
                                colspan="3"
                                  class="list"
                                  style="font-size: 14px;text-align: right;padding: 5px 20px 5px 5px !important;text-align: right"
                                >
                                  Total Biaya Pengiriman
                                </td>
                                <td
                                  class="list"
                                  style="font-size: 14px;text-align: right;padding: 8px 8px 8px 8px;"
                                >
                                  {{$ongkir}}
                                </td>
                              </tr>
                              <tr>
                                <td
                                  bgcolor="#F8F8F8" colspan="3"
                                  class="list"
                                  style="font-size: 14px;text-align: center;padding: 5px 20px 5px 5px !important;text-align: right"
                                >
                                 Code Unik
                                </td>
                                <td
                                  class="list"
                                  bgcolor="#F8F8F8"
                                  style="font-size: 14px;padding: 8px 8px 8px 8px;text-align: right"
                                >
                                  -({{$code_uniq}})
                                </td>
                              </tr>
                              <tr>
                                <td
                                    bgcolor="#F8F8F8" colspan="3"
                                    class="list"
                                    bgcolor="#F8F8F8"
                                    style="font-size: 14px;font-weight: bold;text-align: center;padding: 5px 20px 5px 5px !important;text-align: right"
                                >
                                  Total Pembayaran
                                </td>
                                <td
                                  class="list"
                                  bgcolor="#F8F8F8"
                                  style="font-size: 14px;font-weight: bold;padding: 8px 8px 8px 8px;text-align: right"
                                >
                                  {{$TotalBayar}}
                                </td>
                              </tr>
                            </tfoot>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td
                    class="innerpadding bodycopy"
                    style="padding: 5px 20px 5px 20px !important;"
                  >
                    <font class="bold"
                      >Nama:</font
                    >
                    {{$nama_penerima}} <br />
                    <font class="bold"
                      >Alamat Pengiriman:</font
                    >
                    {{$alamat_penerima}}<br />
                  </td>
                </tr>
                <tr>
                  <td
                    class="innerpadding bodycopy temukan"
                    style="text-align: center"
                  >
                    Temukan semua di
                  </td>
                </tr>
            <tr>
              <td
                class="innerpadding borderbottom"
                style="padding: 0 0 25px 0 !important"
              >
                <table
                  class="col380"
                  align="left"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  style="width: 50%; max-width: 380px;"
                >
                  <tr>
                    <td>
                      <table
                        width="100%"
                        border="0"
                        ellspacing="0"
                        cellpadding="0"
                        style="padding: 0 0 0 0;"
                      >
                        <tr>
                          <td class="bodycopy" style="text-align: right">
                          <a href="https://play.google.com/store/apps/details?id=id.carsworld&hl=in">
                            <img
                              class="find"
                              src="{{$android}}"
                              border="0"
                              alt=""
                            />
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>

                <table
                  class="col380"
                  align="left"
                  border="0"
                  cellpadding="0"
                  cellspacing="0"
                  style="width: 50%; max-width: 380px;"
                >
                  <tr>
                    <td>
                      <table
                        width="100%"
                        border="0"
                        ellspacing="0"
                        cellpadding="0"
                        style="padding: 0 0 0 0;"
                      >
                        <tr>
                          <td class="bod.ycopy" style="text-align: left">
                            <img
                              class="find"
                              src="{{$iphone}}"
                              border="0"
                              alt=""
                            />
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td
                class="borderbottom"
                align="center"
                style="padding: 30px 0 30px 0;"
              >
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td
                      width="30"
                      style="text-align: center; padding: 0 8px 0 8px;"
                    >
                      <a href="https://www.instagram.com/carsworld.id/">
                        <img
                          class="logo"
                          src="{{$instagram}}"
                          alt="instagram"
                          border="0"
                        />
                      </a>
                    </td>
                    <td
                      width="30"
                      style="text-align: center; padding: 0 8px 0 8px;"
                    >
                      <a href="https://twitter.com/IdCarsworld">
                        <img
                          class="logo"
                          src="{{$twitter}}"
                          alt="Twitter"
                          border="0"
                        />
                      </a>
                    </td>
                    <td
                      width="30"
                      style="text-align: center; padding: 0 8px 0 8px;"
                    >
                      <a href="https://www.linkedin.com/company/carsworld/">
                        <img
                          class="logo"
                          src="{{$linkedin}}"
                          alt="linkedin"
                          border="0"
                        />
                      </a>
                    </td>
                    <td
                      width="30"
                      style="text-align: center; padding: 0 8px 0 8px;"
                    >
                      <a href="https://www.facebook.com/carsworld.id/">
                        <img
                          class="logo"
                          src="{{$facebook}}"
                          alt="facebook"
                          border="0"
                        />
                      </a>
                    </td>
                    <td
                      width="30"
                      style="text-align: center; padding: 0 8px 0 8px;"
                    >
                      <a href="http://www.youtube.com/">
                        <img
                          class="logo"
                          src="{{$youtube}}"
                          alt="youtube"
                          border="0"
                        />
                      </a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td
                class="bodycopy"
                align="center"
                style="padding: 20px 0 20px 0;font-family: 'Roboto';"
              >
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td
                      width="100"
                      style="text-align: center; padding: 0 1px 0 1px;border-right: 1px solid #707070;"
                    >
                      <a href="#" style="color: #707070">
                        Privacy Policy
                      </a>
                    </td>
                    <td
                      width="125"
                      style="text-align: center; padding: 0 1px 0 1px;border-right: 1px solid #707070;"
                    >
                      <a href="#" style="color: #707070">
                        Terms & Condition
                      </a>
                    </td>
                    <td
                      width="90"
                      style="text-align: center; padding: 0 1px 0 1px;"
                    >
                      <a href="#" style="color: #707070">
                        Unsubscribe
                      </a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

            <tr>
              <td
                class="innerpadding"
                style="padding: 30px 20px 130px 20px !important"
              >
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td
                      class="bodycopy"
                      align="center"
                      style="font-family: 'Roboto';color: #707070;"
                    >
                      <div>
                        Ini adalah email otomatis. Mohon untuk tidak membalas
                        email ini. <br />
                        <br />
                        Sunburst CBD Lot II No. 3, BSD City, Lengkong Gudang,
                        Serpong, South <br />
                        Tangerang City, Banten 15321, Indonesia <br />
                        (021) 22356800
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>

          <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
    </table>
    <![endif]-->
        </td>
      </tr>
    </table>
  </body>
</html>
