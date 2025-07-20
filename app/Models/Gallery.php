    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Gallery extends Model
    {
        protected $guarded = ['id'];

        const RULES = [
            'name' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'image'],
        ];
    }
