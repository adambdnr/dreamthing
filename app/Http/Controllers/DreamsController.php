<?php

namespace App\Http\Controllers;

use App\Dream;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DreamsController extends Controller
{
    public function getDreams() {
        $dreams = Dream::all();
        $dreamsToReturn = $this->highlightWords($dreams);
        $disco = 1;
        $data = [
            'dreams'  => $dreamsToReturn,
            'disco'   => $disco
        ];
        return view('home')->with('data', $data);
    }

    public function submit(Request $request) {
        $dreamEntry = new Dream();
        $dreamEntry->dream = $request->input('dream');
        $dreamEntry->save();
        return redirect('/')->with('status', 'INSERTED');
    }

    function highlightWords($dreams) {
        $wrap_before = '<span class="highlight_match">';
        $wrap_after  = '</span>';
        $count = 0;
        $kiscica = 0;
        $countAllWords = 0;

        $words = array('internet', 'telefon', 'widget', 'calendar', 'bug', 'kurzor', 'mobiltelefon', 'számítógép', 'laptop', 'Laptop', 'Google Drive', 'google drive', 'Google drive', 'Google Glass', 'Google glass', 'google glass', 'Vive', 'vive', 'Oculus', 'oculus', 'HTC', 'htc', 'PC', 'Google', 'google', 'Drive', 'drive', 'yahoo', 'Yahoo', 'Grindr', 'grindr', 'Slack', 'slack', 'YouTube', 'youtube', 'WhatsApp', 'whatsapp', 'Facebook', 'facebook', 'Instagram', 'instagram', 'Insta', 'Insta Story', 'instastory', 'insta story', 'insta', 'boomerang', 'Messenger', 'Snapchat', 'Telegraph', 'Twitter', 'Tinder', 'e-mail', 'filter', '2D', '3D', 'chat', 'képernyő', 'interface', 'billentyűzet', 'iPhone', 'Samsung', 'Samsung Galaxy', 'OSX', 'macOS', 'Android', 'Windows', 'Office', 'Adobe', 'Cloud', 'szerver', 'szerverpark', 'kábel', 'filter', 'gomb', 'kijelző', 'gép', 'média', 'VR ', 'AR', 'fotó', 'scroll', 'közösségi média', 'nyomtató', 'információ', 'üzenet', 'videójáték', 'pixel', 'emoji', 'hír', 'poszt', 'update', 'komment', 'lájk', 'like', 'dislike', 'share', 'megoszt', 'lemerül', 'töltő', 'felhív', 'vírus', 'üzen', 'operációs rendszer', 'tag', 'konferencia hívás', 'térerő', 'hashtag', 'automata', 'betárcsáz', 'feltölt', 'letölt');

        $key_words = array();

        foreach ($words as $key=>$value) {
            $key_words[$key] = $value;
        }

        $key_words = implode('|', $key_words);

        $dreams = json_decode($dreams);

        foreach ($dreams as &$value) {
            $countAllWords += str_word_count($value->dream);

            $value->dream = preg_replace("/($key_words)/",
                "$wrap_before$1$wrap_after", $value->dream, -1, $count);
            $kiscica += $count;
        }
        echo $kiscica / $countAllWords;
        shuffle($dreams);
        return $dreams;
    }

}

