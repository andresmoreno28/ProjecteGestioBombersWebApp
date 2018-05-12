<?php

namespace App;

use App\Container;
use App\User;
use App\VehicleInsurer;
use App\VehicleOwner;
use App\VehicleType;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codi',
        'matricula',
        'matricula_data',
        'matricula_tercera',
        'km',
        'km_data',
        'manteniment_data',
        'proper_manteniment_km',
        'proper_manteniment_data',
        'hores_bomba',
        'num_xasis',
        'itv_vigor',
        'itv_propera',
        'marca_model',
        'motor_potencia',
        'eslora',
        'baixa_prevista',
        'donat_de_baixa',
        'asseg_num_polissa',
        'asseg_tipus',
        'places',
        'roda_dimensio',
        'roda_cadenes',
        'vehicle_type_id',
        'vehicle_owner_id',
        'vehicle_insurer_id',
        'final_renting'
    ];

    /**
     * Eloquent: Relationships.
     **************************************************************************/
    /**
     * User.
     * Get the user of the vehicle.
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    /**
     * Type.
     * Get the type of the vehicle.
     */
    public function type()
    {
      return $this->belongsTo('App\VehicleType','vehicle_type_id','id','vehicle_types');

    }

    /**
     * Owner.
     * Get the owner of the vehicle.
     */
    public function owner()
    {
        return $this->belongsTo('App\VehicleOwner','vehicle_owner_id','id','vehicle_owners');
    }

    /**
     * Insurers.
     * Get the insurers of the vehicle.
     */
    public function insurers()
    {
      return $this->belongsTo('App\VehicleInsurer','vehicle_insurer_id','id','vehicle_insurers');

    }

    /**
     * Containers.
     * Get the containers of the vehicle.
     */
    public function containers()
    {
        return $this->hasMany(Container::class);
    }

    /**
     * Codi.
     * Get the code of the vehicle.
     */
    public function codi()
    {
      $users=$this->belongsTo('App\User','user_id','id','users');

      $x = $this->user->region['codi'].".".$this->user['codi_parc'].".".$this['matricula'];//S'ha dafegir codi vehicle i canviar matricula daquesta funcio
        return $this->user->region['codi'].".".$this->user['codi_parc'].".".$this['matricula'];
    }

    /**
     * createTextImage
     * createTextImage.
     */
    public function createTextImage($text)
    {
      /*header("Content-type: public/img/png");
      $cadena = $text;
      $im     = imagecreatefrompng("img/Bombers.png");

      $naranja = imagecolorallocate($im, 220, 210, 60);
      $px     = (imagesx($im) - 7.5 * strlen($cadena)) / 2;
      imagestring($im, 3, $px, 9, $cadena, $naranja);
      imagefontheight(200);
      imagefontwidth(200);

      imagepng($im, 'img/x.png');
      imagedestroy($im);*/
      // Set font size

    $font_size = 4;



    $txt=explode("n",$text);

    $width=0;

    foreach ($txt as $k=>$string) {



        //calculate width of string

        $width=max($width,strlen($string));

    }

    $width  = imagefontwidth($font_size)*$width;

    $height = imagefontheight($font_size)*count($txt);

    $fontheight=imagefontheight($font_size);

    $fontwidth=imagefontwidth($font_size);

    $img = imagecreatetruecolor($width,$height);

    $bg = imagecolorallocate($img, 0xAA, 0x00, 0x00);

    imagefilledrectangle($img, 0, 0,$width ,$height , $bg);

    $color = imagecolorallocate($img, 255, 255, 255);

    foreach ($txt as $k=>$string) {
      $length = strlen($string);

        $ypos = 0;

        for($i=0;$i<$length;$i++){

          $xpos = $i * $fontwidth;

          $ypos = $k * $fontheight;
      imagechar($img, $font_size, $xpos, $ypos, $string, $color);

          $string = substr($string, 1);

        }

    }

  header("Content-Type: image/png");

  imagepng($img, 'img/x.png');

  imagedestroy($img);


    }
}
