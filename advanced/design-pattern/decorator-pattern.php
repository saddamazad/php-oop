<?php
// Takes an existing object and modifies it's output

class Article {
    private $title, $time;

    public function __construct($title, $time) {
        $this->title = $title;
        $this->time = $time;
    }

    public function getTime() {
        return $this->time;
    }

    public function getTitle() {
        return $this->title;
    }

    public function displayTitle() {
        $title = $this->getTitle();
        $date = date("Y/m/d H:i:s", $this->getTime());
        echo "{$title} was published on {$date}";
    }
}

$article = new Article("Article Title", time()-500);
$article->displayTitle();



// creating a new Class to change the output of the `displayTitle()` function without modifying the main Class
class ArticleTitleDecorator {
    private $article;

    // pass/inject the object as parameter (for which we want to modify the output of a particular function/method)
    public function __construct(Article $article) {
        $this->article = $article;
    }

    public function displayTitle() {
        $title = $this->article->getTitle();
        $date = $this->timeAgo($this->article->getTime());
        echo "{$title} was published {$date}";
    }

    private function timeAgo($time) {
  
        // Calculate difference between current
        // time and given timestamp in seconds
        $diff     = time() - $time;
          
        // Time difference in seconds
        $sec     = $diff;
          
        // Convert time difference in minutes
        $min     = round($diff / 60 );
          
        // Convert time difference in hours
        $hrs     = round($diff / 3600);
          
        // Convert time difference in days
        $days     = round($diff / 86400 );
          
        // Convert time difference in weeks
        $weeks     = round($diff / 604800);
          
        // Convert time difference in months
        $mnths     = round($diff / 2600640 );
          
        // Convert time difference in years
        $yrs     = round($diff / 31207680 );
          
        // Check for seconds
        if($sec <= 60) {
            return "$sec seconds ago";
        }
          
        // Check for minutes
        else if($min <= 60) {
            if($min==1) {
                return "one minute ago";
            }
            else {
                return "$min minutes ago";
            }
        }
          
        // Check for hours
        else if($hrs <= 24) {
            if($hrs == 1) { 
                return "an hour ago";
            }
            else {
                return "$hrs hours ago";
            }
        }
          
        // Check for days
        else if($days <= 7) {
            if($days == 1) {
                return "Yesterday";
            }
            else {
                return "$days days ago";
            }
        }
          
        // Check for weeks
        else if($weeks <= 4.3) {
            if($weeks == 1) {
                return "a week ago";
            }
            else {
                return "$weeks weeks ago";
            }
        }
          
        // Check for months
        else if($mnths <= 12) {
            if($mnths == 1) {
                return "a month ago";
            }
            else {
                return "$mnths months ago";
            }
        }
          
        // Check for years
        else {
            if($yrs == 1) {
                return "one year ago";
            }
            else {
                return "$yrs years ago";
            }
        }
    }
}

$atd = new ArticleTitleDecorator($article);
echo "<br>";
$atd->displayTitle();