<?php 
namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model // tabel post
{
    use HasFactory;
    // protected $table = 'blog_posts'; // Jika nama tabel berbeda
    // protected $primaryKey = 'post_id'; // Jika nama primary key berbeda
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}    

?>