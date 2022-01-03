<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Outbreak extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'latitude', 'longitude', 'creator_id',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    public $appends = [
        'coordinate', 'map_popup_content',
    ];

    /**
     * Get outbreak name_link attribute.
     *
     * @return string
     */
    public function getNameLinkAttribute()
    {
        $title = __('app.show_detail_title', [
            'name' => $this->name, 'type' => __('outbreak.outbreak'),
        ]);
        $link = '<a href="'.route('outbreaks.show', $this).'"';
        $link .= ' title="'.$title.'">';
        $link .= $this->name;
        $link .= '</a>';

        return $link;
    }

    /**
     * outbreak belongs to User model relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get outbreak coordinate attribute.
     *
     * @return string|null
     */
    public function getCoordinateAttribute()
    {
        if ($this->latitude && $this->longitude) {
            return $this->latitude.', '.$this->longitude;
        }
    }

    /**
     * Get outbreak map_popup_content attribute.
     *
     * @return string
     */
    public function getMapPopupContentAttribute()
    {
        $mapPopupContent = '';
        $mapPopupContent .= '<div class="my-2"><strong>'.__('outbreak.name').':</strong><br>'.$this->name_link.'</div>';
        $mapPopupContent .= '<div class="my-2"><strong>'.__('outbreak.coordinate').':</strong><br>'.$this->coordinate.'</div>';

        return $mapPopupContent;
    }
}
