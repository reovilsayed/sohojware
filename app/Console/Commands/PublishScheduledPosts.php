<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Post;

class PublishScheduledPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'publish:posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will publishall the posts that is scheduled';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get the current date
        $currentDate = Carbon::now()->toDateString();

        // Find the scheduled posts that have a publish date less than or equal to the current date
        $scheduledPosts = Post::where('status', 'SCHEDULE')
            ->whereDate('publish_date', '<=', $currentDate)
            ->get();

        // Publish the scheduled posts
        foreach ($scheduledPosts as $post) {
            $post->status = 'PUBLISHED';
            $post->created_at = now();
            $post->publish_date = null;
            $post->save();
        }
    }
}
