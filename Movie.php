<!-- 
    ! esempio classe !

    
        "adult": false,
        "backdrop_path": "/bOtdLAnUxX3Hxn6LV5zFi15KW6S.jpg",
        "genre_ids": 
            28,
            16,
            18,
            878,
            12
        ,
        "id": 492999,
        "original_language": "ja",
        "original_title": "劇場版 進撃の巨人 覚醒の咆哮",
        "overview": "Eren Yeager and others of the 104th Training Corps have just begun to become full members of the Survey Corps. As they ready themselves to face the Titans once again, their preparations are interrupted by the invasion of Wall Rose—but all is not as it seems as more mysteries are unraveled. As the Survey Corps races to save the wall, they uncover more about the invading Titans and the dark secrets of their own members.",
        "popularity": 214.031,
        "poster_path": "/5tcuowV4HZRxxvDiWn4bmumuZSk.jpg",
        "release_date": "2018-01-13",
        "title": "Attack on Titan: The Roar of Awakening",
        "video": true,
        "vote_average": 8.4,
        "vote_count": 181
    

-->

<?php


class Movie 
{
    public $title;
    public $originalTitle;
    public $overview;
    public $genres ;
    public $popularity;
    public $language;
    public $release_date;
    public $vote_average;

    public function __construct(string $title, array $language, array $genres)
    {
        $this->title = $title;
        $this->language = $language;
        $this->genres = $genres;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setOriginalTitle($originalTitle)
    {
        $this->originalTitle = $originalTitle;
    }
    public function setOverview($overview)
    {
        $this->overview = $overview;
    }
    public function setPopularity($popularity)
    {
        $this->popularity = $popularity;
    }
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function setReleaseDate($release_date)
    {
        $this->release_date = $release_date;
    }
    public function setVoteAverage($vote_average)
    {
        if (is_float($vote_average)) 
        {
            $this->vote_average = $vote_average;
        }
        else
        {
            die('non è un float');
        }
    }
    public function setGenres($genres)
    {
        if (is_array($genres)) 
        {
            $this->genres = $genres;
        }
        die('non è un array');
    }
    

    public function getTitle()
    {
        return $this->title;
    }
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }
    public function getOverview()
    {
        return $this->overview;
    }
    public function getPopularity()
    {
        return $this->popularity;
    }
    public function getLanguage()
    {
        return implode(",", $this->language);
    }
    public function getReleaseDate()
    {
        return $this->release_date;
    }
    public function getVoteAverage()
    {
        return $this->vote_average;
    }
    public function getGenres()
    {
        return $this->genres;
    }
    
    

};

$movie = new Movie('Attack on Titan: The Roar of Awakening', ['ja'], ['azione', 'fantasy', 'cupo']);
$movie->setOriginalTitle('劇場版 進撃の巨人 覚醒の咆哮');
$movie->setReleaseDate('2018-01-13');
$movie->setVoteAverage(8.4);

echo '
        <ul>
            <li>Titolo: '.$movie->getTitle().'</li>
            <li>Titolo Originale: '.$movie->getOriginalTitle().'</li>
            <li>Lingue Disponibili: '.$movie->getLanguage().'</li>
            <li>Voto: '.$movie->getVoteAverage().'</li>
            <li>Data Rilascio: '.$movie->getReleaseDate().'</li>
        </ul>
    ';

?>



