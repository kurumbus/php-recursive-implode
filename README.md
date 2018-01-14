# php-recursive-implode
I was surprised to see this wasn't still a thing

Transforms something like this
$array = [
  ['k1'=>['v1','v2']],
  ['k2'=>'v3'], 
  ['k3' => ['k4'=>['v4','k5'=>['v5']]]], 
  'k6'=>'v6'
];
Into this:
"k1.v1.v2.k2.v3.k3.k4.v4.k5.v5.k6.v6"

I used it to generate a unique key to cache a view with necessary parameters in laravel (https://github.com/spatie/laravel-partialcache)
