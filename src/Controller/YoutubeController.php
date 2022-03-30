<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class YoutubeController extends AbstractController
{
    /**
     * @Route("/", name="Youtube_home")
     */
    public function homepage(): Response
    {
        $youtubeArtist = ["Chris Brown", "Justin Bieber", "Drake"];
        return $this->render("Youtube/home.html.twig", [
            'artist'=> $youtubeArtist
        ]);
    }

    /**
     * @Route("/music/{a}", name="Youtube_music")
     */
    public function sound($a): Response
    {
        $youtubeArtist = [
            'Chris Brown' => ["Kiss", "Don't Think They Know", "Deuces"],
            'Justin Bieber' => ["Holy", "Lonely", "Beauy and the beat"],
            'Drake' => ["One Dance", "Chicago Freestyle", "Hold on, We're Going Home"]
        ];
        return $this->render("Youtube/music.html.twig", [
            'artist'=> $a,
            'songs'=> $youtubeArtist[$a]
        ]);
    }
}