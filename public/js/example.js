/**
 * LICENCIA...: CC BY-NC-ND 4.0 | Atribucion-NoComercial-SinDerivar 4.0 Inter.
 * PROYECTO...: RESIZE SLIDER.
 * FECHA......: V.2.0.0 | 14/02/2015.
 * AUTOR......: Alfonso | www.abravogal.com
 * _____________________________________________________________________________
 *
 * TITULO.....:   CONFIGURACION DE RESIZE SLIDER.
 * DESCRIPCION: - Parametros de configuracion.
 *
 *                  "transition" : tiempo del efecto en milisegundos.
 *
 *                  "speed"      : tiempo de exposicion de la imagen en milisegundos.
 *
 *                  "hover"      : TRUE | FALSE - Destiene el pasador al
 *                                 posicionarse en la zona central con el puntero
 *                                 del raton.
 *
 *                  "aleatorio"  : TRUE | FALSE - Muesta las imagenes de forma aleatoria.
 *
 *                  "float"      : LETF | NONE | RIGHT - Posicion del slider.
 *
 *                  "width"      : % | px - Anchura del slider.
 *
 *                  "height"     : % | px - Altura del slider.
 * _____________________________________________________________________________
 *
 * TITLE.......:   Resize Slider Config File.
 * DESCRIPTION.: - Params
 *
 *                   "transition" : FX time (milliseconds).
 *
 *                   "speed"      : time to show any picture (milliseconds).
 *
 *                   "hover"      : TRUE | FALSE - If is true, you can stop the
 *                                  slider If you leave the pointer in the center
 *                                  of the image.
 *
 *                   "aleatorio"  : TRUE | FALSE - If is true, show pictures randomly.
 *
 *                   "float"      : LETF | NONE | RIGHT - Slider's position.
 *
 *                   "width"      : % | px - Slider's width.
 *
 *                   "height"     : % | px - Slider's height.
 */

$(document).ready(function ()
{

  $("#resizeSlider").resizeSlider(
  {
//    "transition" : 750,
    "speed"      : 1750,
//    "hover"      : false,
//    "aleatorio"  : false,
//    "float"      : "right",
//    "width"      : "500px",
//    "height"     : "500px",
    "image":
    {
      "presentation":
      {
        "landscape":
        {
          "url"      : "url(img/0.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "center bottom"
        },
        "portrait":
        {
          "url"      : "url(img/0.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "right top"
        }
      },

      "presentation 1":
      {
        "landscape":
        {
          "url"      : "url(img/01.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "center bottom"
        },
        "portrait":
        {
          "url"      : "url(img/01.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "right top"
        }
      },

      "presentation 2":
      {
        "landscape":
        {
          "url"      : "url(img/02.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "center bottom"
        },
        "portrait":
        {
          "url"      : "url(img/02.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "right top"
        }
      },"presentation 3":
      {
        "landscape":
        {
          "url"      : "url(img/03.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "center bottom"
        },
        "portrait":
        {
          "url"      : "url(img/03.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "left top"
        }
      },"presentation 4":
      {
        "landscape":
        {
          "url"      : "url(img/04.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "center bottom"
        },
        "portrait":
        {
          "url"      : "url(img/04.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "right top"
        }
      },"presentation 5":
      {
        "landscape":
        {
          "url"      : "url(img/05.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "center bottom"
        },
        "portrait":
        {
          "url"      : "url(img/05.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "left top"
        }
      },"presentation 6":
      {
        "landscape":
        {
          "url"      : "url(img/06.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "center bottom"
        },
        "portrait":
        {
          "url"      : "url(img/06.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "right top"
        }
      },"presentation 7":
      {
        "landscape":
        {
          "url"      : "url(img/07.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "center bottom"
        },
        "portrait":
        {
          "url"      : "url(img/07.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "right top"
        }
      },"presentation 8":
      {
        "landscape":
        {
          "url"      : "url(img/08.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "center bottom"
        },
        "portrait":
        {
          "url"      : "url(img/08.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "right top"
        }
      },"presentation 9":
      {
        "landscape":
        {
          "url"      : "url(img/09.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "center bottom"
        },
        "portrait":
        {
          "url"      : "url(img/09.jpg)",
          "size"     : "cover",
          "repeat"   : "no-repeat",
          "position" : "right top"
        }
      },
    }
  });
});