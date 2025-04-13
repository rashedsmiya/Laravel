<?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Category extends Model
        {

            protected $fillable = [
                'name',
                'slug',
                'image',
                'status',
            ];

            protected  $casts = [
                'status' => 'integer',
            ];

            public const STATUS_ACTIVE = 'btn btn-warning';
            public const STATUS_INACTIVE = 'btn btn-success';

            // Status Labeles
            public static function getStatusLabels(): array{
                return [
                    self::STATUS_ACTIVE => 'Active',
                    self::STATUS_INACTIVE => 'Inactive',
                ];
            }
            // Status Color
            public static function getStatusColor(): array
            {
                return [
                    self::STATUS_ACTIVE => 'bg-success',
                    self::STATUS_INACTIVE => 'bg-warning',
                ];
            }

            public static function getStatusBtnLabels(): array
            {
              return [
                  self::STATUS_ACTIVE => 'Deactive',
                  self::STATUS_INACTIVE => 'Active',
              ];
            }

            // Accessor for status label
            public function  getStatusLabelAtterbute(): string{
                return self::getSatusLabels()[$this->status] ?? 'Unknow';
            }
            // Accessor for status color
            public function getStatusColorAttribute(): string

            {
                 return  self::getStatusLabels()[$this->status] ?? 'bg-secondary';
            }

            // Accessor for status color
            public function getStatusLabelAttribute(): string

            {
                return  self::getStatusLabels()[$this->status] ?? 'Unknown';
            }

            // Accessor for status color
            public function getStatusBtnColorAttribute(): string

            {
                return  self::getStatusBtnColor()[$this->status] ?? 'btn btn-secondary';
            }




//            public function getStatusTitle(){
//
//
//                switch ($this->status) {
//                     case 1:
//                          return 'Active';
//                          break;
//                     case 0:
//                         return 'Inactive';
//                         break;
//                }
//            }
//
//
//
//            public function getStatusBg(){
//                switch ($this->status){
//                    case 1:
//                         return 'bg-success';
//                         break;
//                    case 0;
//                         return 'bg-danger';
//                         break;
//                }
//            }
//
//            public function getStatusBtnTitle()
//            {
//                switch ($this->status){
//                    case 1:
//                        return 'Inactive';
//                        break;
//                    case 0:
//                        return 'Active';
//                        break;
//                }
//            }
//
//            public function getStatusBtnBg()
//            {
//                switch ($this->status){
//                    case 1:
//                        return 'btn-warning';
//                        break;
//                    case 0:
//                        return 'btn-success';
//                        break;
//                }
//            }

            public function scopeActive($squery)
            {
                return $squery->where('status', 1);
            }

            public function scopeDeactive($query){
                return $query->where('status', 0);
            }
        }





