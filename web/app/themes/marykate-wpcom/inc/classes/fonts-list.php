<?php
class WPCanvas2_Fonts_List {
	protected static $instance = null;
	public $fonts = null;
	protected $google_fonts = null;

	private function __construct() {
		if ( null == $this->fonts ) {
			$this->init_fonts();
		}
	}

	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	public function get_google_code( $font ) {
		$code = array();

		foreach ( $font as $key => $value ) {
			$font_family_key = $this->sanitize_key( $value['family'] );

			if ( ! array_key_exists( $font_family_key, $this->google_fonts ) ) {
				continue;
			}

			if ( ! array_key_exists( $font_family_key, $code ) ) {
				$code[ $font_family_key ] = array(
					'family' => $this->sanitize_google_code( $value['family'] ),
					'variants' => array(),
				);
			}

			$variants = $this->get_google_variants( $value['weight'] );
			if ( ! empty( $variants ) && is_array( $variants ) ) {
				list( $v1, $v2 ) = $variants;
				if ( ! in_array( $v1, $code[ $font_family_key ]['variants'] ) ) {
					$code[ $font_family_key ]['variants'][] = $v1;
				}
				if ( ! in_array( $v2, $code[ $font_family_key ]['variants'] ) ) {
					$code[ $font_family_key ]['variants'][] = $v2;
				}
			}

			$variants = $this->get_google_variants( $value['bold_weight'] );
			if ( ! empty( $variants ) && is_array( $variants ) ) {
				list( $v1, $v2 ) = $variants;
				if ( ! in_array( $v1, $code[ $font_family_key ]['variants'] ) ) {
					$code[ $font_family_key ]['variants'][] = $v1;
				}
				if ( ! in_array( $v2, $code[ $font_family_key ]['variants'] ) ) {
					$code[ $font_family_key ]['variants'][] = $v2;
				}
			}

		}

		foreach ( $code as $key => $value ) {
			$code[ $key ]['variants'] = array_unique( $value['variants'] );
			$code[ $key ]['variants'] = implode( ',', $value['variants'] );
			$code[ $key ] = implode( ':', $code[ $key ] );
		}
		$code = implode( '|', $code );

		return $code;
	}

	public function get_google_variants( $weight ) {
		$string = '';

		$weight = strtolower( $weight );

		switch ( $weight ) {
			case '100' :
			case '100regular' :
				return array( '100', '100italic' );
			case '200' :
				return array( '200', '200italic' );
			case '300' :
				return array( '300', '300italic' );
			case 'normal' :
			case '400' :
				return array( 'regular', 'italic' );
			case '500' :
				return array( '500', '500italic' );
			case '600' :
				return array( '600', '600italic' );
			case 'bold' :
			case '700' :
				return array( '700', '700italic' );
			case '800' :
				return array( '800', '800italic' );
			case '900' :
				return array( '900', '900italic' );
		}

		return null;
	}

	public function set_fonts() {
		$this->fonts = $this->fonts();
	}

	public function set_google_fonts() {
		$this->google_fonts = $this->google_fonts();
		$this->generate_font_list();
	}

	public function set_custom_fonts() {
		global $wpc2_default;

		$at_font_face = get_theme_mod( 'at_font_face', $wpc2_default['at_font_face'] );
		$family = $this->parse_font_family_name( $at_font_face );

		if ( ! empty( $family ) && is_array( $family ) ) {
			foreach ( $family as $key => $value ) {
				$this->fonts[ $key ] = $value;
			}
		}
	}

	public function generate_font_list() {
		foreach ( $this->google_fonts as $key => $value ) {
			$this->fonts[ $key ] = $value;
		}
	}

	public function sanitize_key( $key ) {
		$key = strtolower( preg_replace( '/[^a-zA-Z0-9]/', '_', $key ) );

		return $key;
	}

	public function sanitize_google_code( $code ) {
		$code = preg_replace( '/\s/', '+', $code );

		return $code;
	}

	public function init_fonts() {
		$this->set_fonts();
		$this->set_google_fonts();
		$this->set_custom_fonts();

		ksort( $this->fonts );
	}

	public function parse_font_family_name( $font ) {
		$family = array();

		if ( preg_match_all( '/font-family:([A-Za-z0-9\-_"\'\s]+);/', $font, $matches ) ) {
			if ( is_array( $matches ) && ! empty( $matches ) && isset( $matches[1] ) && is_array( $matches[1] ) ) {
				foreach( $matches[1] as $match ) {
					$name = $this->sanitize_font_family_name( $match );
					$key = $this->sanitize_key( $name );
					$family[ $key ] = $name;
				}
			}
		}

		return $family;
	}

	public function sanitize_font_family_name( $name ) {
		$name = preg_replace( '/[^a-zA-Z0-9\-_]/', '', $name );

		return $name;
	}

	function fonts() {
		return array(
			'arial' => 'Arial',
			'arial_black' => 'Arial Black',
			'comic_sans_ms' => 'Comic Sans MS',
			'courier_new' => 'Courier New',
			'georgia' => 'Georgia',
			'impact' => 'Impact',
			'lucida_console' => 'Lucida Console',
			'lucida_sans_unicode' => 'Lucida Sans Unicode',
			'palatino_linotype' => 'Palatino Linotype',
			'tahoma' => 'Tahoma',
			'times_new_roman' => 'Times New Roman',
			'trebuchet_ms' => 'Trebuchet MS',
			'verdana' => 'Verdana',
		);
	}

	/**
	* Return google font array
	*
	* @since 3.5.2
	* @access public
	*
	* @return array
	*/
   function google_fonts() {
		return array(
			'abeezee' => 'ABeeZee',
			'abel' => 'Abel',
			'abril_fatface' => 'Abril Fatface',
			'aclonica' => 'Aclonica',
			'acme' => 'Acme',
			'actor' => 'Actor',
			'adamina' => 'Adamina',
			'advent_pro' => 'Advent Pro',
			'aguafina_script' => 'Aguafina Script',
			'akronim' => 'Akronim',
			'aladin' => 'Aladin',
			'aldrich' => 'Aldrich',
			'alef' => 'Alef',
			'alegreya' => 'Alegreya',
			'alegreya_sc' => 'Alegreya SC',
			'alegreya_sans' => 'Alegreya Sans',
			'alegreya_sans_sc' => 'Alegreya Sans SC',
			'alex_brush' => 'Alex Brush',
			'alfa_slab_one' => 'Alfa Slab One',
			'alice' => 'Alice',
			'alike' => 'Alike',
			'alike_angular' => 'Alike Angular',
			'allan' => 'Allan',
			'allerta' => 'Allerta',
			'allerta_stencil' => 'Allerta Stencil',
			'allura' => 'Allura',
			'almendra' => 'Almendra',
			'almendra_display' => 'Almendra Display',
			'almendra_sc' => 'Almendra SC',
			'amarante' => 'Amarante',
			'amaranth' => 'Amaranth',
			'amatic_sc' => 'Amatic SC',
			'amethysta' => 'Amethysta',
			'anaheim' => 'Anaheim',
			'andada' => 'Andada',
			'andika' => 'Andika',
			'annie_use_your_telescope' => 'Annie Use Your Telescope',
			'anonymous_pro' => 'Anonymous Pro',
			'antic' => 'Antic',
			'antic_didone' => 'Antic Didone',
			'antic_slab' => 'Antic Slab',
			'anton' => 'Anton',
			'arapey' => 'Arapey',
			'arbutus' => 'Arbutus',
			'arbutus_slab' => 'Arbutus Slab',
			'architects_daughter' => 'Architects Daughter',
			'archivo_black' => 'Archivo Black',
			'archivo_narrow' => 'Archivo Narrow',
			'arimo' => 'Arimo',
			'arizonia' => 'Arizonia',
			'armata' => 'Armata',
			'artifika' => 'Artifika',
			'arvo' => 'Arvo',
			'asap' => 'Asap',
			'asset' => 'Asset',
			'astloch' => 'Astloch',
			'asul' => 'Asul',
			'atomic_age' => 'Atomic Age',
			'aubrey' => 'Aubrey',
			'audiowide' => 'Audiowide',
			'autour_one' => 'Autour One',
			'average' => 'Average',
			'average_sans' => 'Average Sans',
			'averia_gruesa_libre' => 'Averia Gruesa Libre',
			'averia_libre' => 'Averia Libre',
			'averia_sans_libre' => 'Averia Sans Libre',
			'averia_serif_libre' => 'Averia Serif Libre',
			'bad_script' => 'Bad Script',
			'balthazar' => 'Balthazar',
			'bangers' => 'Bangers',
			'basic' => 'Basic',
			'baumans' => 'Baumans',
			'belgrano' => 'Belgrano',
			'belleza' => 'Belleza',
			'benchnine' => 'BenchNine',
			'bentham' => 'Bentham',
			'berkshire_swash' => 'Berkshire Swash',
			'bevan' => 'Bevan',
			'bigelow_rules' => 'Bigelow Rules',
			'bigshot_one' => 'Bigshot One',
			'bilbo' => 'Bilbo',
			'bilbo_swash_caps' => 'Bilbo Swash Caps',
			'bitter' => 'Bitter',
			'black_ops_one' => 'Black Ops One',
			'bonbon' => 'Bonbon',
			'boogaloo' => 'Boogaloo',
			'bowlby_one' => 'Bowlby One',
			'bowlby_one_sc' => 'Bowlby One SC',
			'brawler' => 'Brawler',
			'bree_serif' => 'Bree Serif',
			'bubblegum_sans' => 'Bubblegum Sans',
			'bubbler_one' => 'Bubbler One',
			'buda' => 'Buda',
			'buenard' => 'Buenard',
			'butcherman' => 'Butcherman',
			'butterfly_kids' => 'Butterfly Kids',
			'cabin' => 'Cabin',
			'cabin_condensed' => 'Cabin Condensed',
			'cabin_sketch' => 'Cabin Sketch',
			'caesar_dressing' => 'Caesar Dressing',
			'cagliostro' => 'Cagliostro',
			'calligraffitti' => 'Calligraffitti',
			'cambo' => 'Cambo',
			'candal' => 'Candal',
			'cantarell' => 'Cantarell',
			'cantata_one' => 'Cantata One',
			'cantora_one' => 'Cantora One',
			'capriola' => 'Capriola',
			'cardo' => 'Cardo',
			'carme' => 'Carme',
			'carrois_gothic' => 'Carrois Gothic',
			'carrois_gothic_sc' => 'Carrois Gothic SC',
			'carter_one' => 'Carter One',
			'caudex' => 'Caudex',
			'cedarville_cursive' => 'Cedarville Cursive',
			'ceviche_one' => 'Ceviche One',
			'changa_one' => 'Changa One',
			'chango' => 'Chango',
			'chau_philomene_one' => 'Chau Philomene One',
			'chela_one' => 'Chela One',
			'chelsea_market' => 'Chelsea Market',
			'cherry_cream_soda' => 'Cherry Cream Soda',
			'cherry_swash' => 'Cherry Swash',
			'chewy' => 'Chewy',
			'chicle' => 'Chicle',
			'chivo' => 'Chivo',
			'cinzel' => 'Cinzel',
			'cinzel_decorative' => 'Cinzel Decorative',
			'clicker_script' => 'Clicker Script',
			'coda' => 'Coda',
			'coda_caption' => 'Coda Caption',
			'codystar' => 'Codystar',
			'combo' => 'Combo',
			'comfortaa' => 'Comfortaa',
			'coming_soon' => 'Coming Soon',
			'concert_one' => 'Concert One',
			'condiment' => 'Condiment',
			'contrail_one' => 'Contrail One',
			'convergence' => 'Convergence',
			'cookie' => 'Cookie',
			'copse' => 'Copse',
			'corben' => 'Corben',
			'courgette' => 'Courgette',
			'cousine' => 'Cousine',
			'coustard' => 'Coustard',
			'covered_by_your_grace' => 'Covered By Your Grace',
			'crafty_girls' => 'Crafty Girls',
			'creepster' => 'Creepster',
			'crete_round' => 'Crete Round',
			'crimson_text' => 'Crimson Text',
			'croissant_one' => 'Croissant One',
			'crushed' => 'Crushed',
			'cuprum' => 'Cuprum',
			'cutive' => 'Cutive',
			'cutive_mono' => 'Cutive Mono',
			'damion' => 'Damion',
			'dancing_script' => 'Dancing Script',
			'dawning_of_a_new_day' => 'Dawning of a New Day',
			'days_one' => 'Days One',
			'delius' => 'Delius',
			'delius_swash_caps' => 'Delius Swash Caps',
			'delius_unicase' => 'Delius Unicase',
			'della_respira' => 'Della Respira',
			'denk_one' => 'Denk One',
			'devonshire' => 'Devonshire',
			'dhurjati' => 'Dhurjati',
			'didact_gothic' => 'Didact Gothic',
			'diplomata' => 'Diplomata',
			'diplomata_sc' => 'Diplomata SC',
			'domine' => 'Domine',
			'donegal_one' => 'Donegal One',
			'doppio_one' => 'Doppio One',
			'dorsa' => 'Dorsa',
			'dosis' => 'Dosis',
			'dr_sugiyama' => 'Dr Sugiyama',
			'droid_sans' => 'Droid Sans',
			'droid_sans_mono' => 'Droid Sans Mono',
			'droid_serif' => 'Droid Serif',
			'duru_sans' => 'Duru Sans',
			'dynalight' => 'Dynalight',
			'eb_garamond' => 'EB Garamond',
			'eagle_lake' => 'Eagle Lake',
			'eater' => 'Eater',
			'economica' => 'Economica',
			'ek_mukta' => 'Ek Mukta',
			'electrolize' => 'Electrolize',
			'elsie' => 'Elsie',
			'elsie_swash_caps' => 'Elsie Swash Caps',
			'emblema_one' => 'Emblema One',
			'emilys_candy' => 'Emilys Candy',
			'engagement' => 'Engagement',
			'englebert' => 'Englebert',
			'enriqueta' => 'Enriqueta',
			'erica_one' => 'Erica One',
			'esteban' => 'Esteban',
			'euphoria_script' => 'Euphoria Script',
			'ewert' => 'Ewert',
			'exo' => 'Exo',
			'exo_2' => 'Exo 2',
			'expletus_sans' => 'Expletus Sans',
			'fanwood_text' => 'Fanwood Text',
			'fascinate' => 'Fascinate',
			'fascinate_inline' => 'Fascinate Inline',
			'faster_one' => 'Faster One',
			'fauna_one' => 'Fauna One',
			'federant' => 'Federant',
			'federo' => 'Federo',
			'felipa' => 'Felipa',
			'fenix' => 'Fenix',
			'finger_paint' => 'Finger Paint',
			'fira_mono' => 'Fira Mono',
			'fira_sans' => 'Fira Sans',
			'fjalla_one' => 'Fjalla One',
			'fjord_one' => 'Fjord One',
			'flamenco' => 'Flamenco',
			'flavors' => 'Flavors',
			'fondamento' => 'Fondamento',
			'fontdiner_swanky' => 'Fontdiner Swanky',
			'forum' => 'Forum',
			'francois_one' => 'Francois One',
			'freckle_face' => 'Freckle Face',
			'fredericka_the_great' => 'Fredericka the Great',
			'fredoka_one' => 'Fredoka One',
			'fresca' => 'Fresca',
			'frijole' => 'Frijole',
			'fruktur' => 'Fruktur',
			'fugaz_one' => 'Fugaz One',
			'gabriela' => 'Gabriela',
			'gafata' => 'Gafata',
			'galdeano' => 'Galdeano',
			'galindo' => 'Galindo',
			'gentium_basic' => 'Gentium Basic',
			'gentium_book_basic' => 'Gentium Book Basic',
			'geo' => 'Geo',
			'geostar' => 'Geostar',
			'geostar_fill' => 'Geostar Fill',
			'germania_one' => 'Germania One',
			'gidugu' => 'Gidugu',
			'gilda_display' => 'Gilda Display',
			'give_you_glory' => 'Give You Glory',
			'glass_antiqua' => 'Glass Antiqua',
			'glegoo' => 'Glegoo',
			'gloria_hallelujah' => 'Gloria Hallelujah',
			'goblin_one' => 'Goblin One',
			'gochi_hand' => 'Gochi Hand',
			'gorditas' => 'Gorditas',
			'goudy_bookletter_1911' => 'Goudy Bookletter 1911',
			'graduate' => 'Graduate',
			'grand_hotel' => 'Grand Hotel',
			'gravitas_one' => 'Gravitas One',
			'great_vibes' => 'Great Vibes',
			'griffy' => 'Griffy',
			'gruppo' => 'Gruppo',
			'gudea' => 'Gudea',
			'habibi' => 'Habibi',
			'halant' => 'Halant',
			'hammersmith_one' => 'Hammersmith One',
			'hanalei' => 'Hanalei',
			'hanalei_fill' => 'Hanalei Fill',
			'handlee' => 'Handlee',
			'happy_monkey' => 'Happy Monkey',
			'headland_one' => 'Headland One',
			'henny_penny' => 'Henny Penny',
			'herr_von_muellerhoff' => 'Herr Von Muellerhoff',
			'hind' => 'Hind',
			'holtwood_one_sc' => 'Holtwood One SC',
			'homemade_apple' => 'Homemade Apple',
			'homenaje' => 'Homenaje',
			'im_fell_dw_pica' => 'IM Fell DW Pica',
			'im_fell_dw_pica_sc' => 'IM Fell DW Pica SC',
			'im_fell_double_pica' => 'IM Fell Double Pica',
			'im_fell_double_pica_sc' => 'IM Fell Double Pica SC',
			'im_fell_english' => 'IM Fell English',
			'im_fell_english_sc' => 'IM Fell English SC',
			'im_fell_french_canon' => 'IM Fell French Canon',
			'im_fell_french_canon_sc' => 'IM Fell French Canon SC',
			'im_fell_great_primer' => 'IM Fell Great Primer',
			'im_fell_great_primer_sc' => 'IM Fell Great Primer SC',
			'iceberg' => 'Iceberg',
			'iceland' => 'Iceland',
			'imprima' => 'Imprima',
			'inconsolata' => 'Inconsolata',
			'inder' => 'Inder',
			'indie_flower' => 'Indie Flower',
			'inika' => 'Inika',
			'irish_grover' => 'Irish Grover',
			'istok_web' => 'Istok Web',
			'italiana' => 'Italiana',
			'italianno' => 'Italianno',
			'jacques_francois' => 'Jacques Francois',
			'jacques_francois_shadow' => 'Jacques Francois Shadow',
			'jim_nightshade' => 'Jim Nightshade',
			'jockey_one' => 'Jockey One',
			'jolly_lodger' => 'Jolly Lodger',
			'josefin_sans' => 'Josefin Sans',
			'josefin_slab' => 'Josefin Slab',
			'joti_one' => 'Joti One',
			'judson' => 'Judson',
			'julee' => 'Julee',
			'julius_sans_one' => 'Julius Sans One',
			'junge' => 'Junge',
			'jura' => 'Jura',
			'just_another_hand' => 'Just Another Hand',
			'just_me_again_down_here' => 'Just Me Again Down Here',
			'kalam' => 'Kalam',
			'kameron' => 'Kameron',
			'karla' => 'Karla',
			'karma' => 'Karma',
			'kaushan_script' => 'Kaushan Script',
			'kavoon' => 'Kavoon',
			'keania_one' => 'Keania One',
			'kelly_slab' => 'Kelly Slab',
			'kenia' => 'Kenia',
			'khand' => 'Khand',
			'kite_one' => 'Kite One',
			'knewave' => 'Knewave',
			'kotta_one' => 'Kotta One',
			'kranky' => 'Kranky',
			'kreon' => 'Kreon',
			'kristi' => 'Kristi',
			'krona_one' => 'Krona One',
			'la_belle_aurore' => 'La Belle Aurore',
			'laila' => 'Laila',
			'lancelot' => 'Lancelot',
			'lato' => 'Lato',
			'league_script' => 'League Script',
			'leckerli_one' => 'Leckerli One',
			'ledger' => 'Ledger',
			'lekton' => 'Lekton',
			'lemon' => 'Lemon',
			'libre_baskerville' => 'Libre Baskerville',
			'life_savers' => 'Life Savers',
			'lilita_one' => 'Lilita One',
			'lily_script_one' => 'Lily Script One',
			'limelight' => 'Limelight',
			'linden_hill' => 'Linden Hill',
			'lobster' => 'Lobster',
			'lobster_two' => 'Lobster Two',
			'londrina_outline' => 'Londrina Outline',
			'londrina_shadow' => 'Londrina Shadow',
			'londrina_sketch' => 'Londrina Sketch',
			'londrina_solid' => 'Londrina Solid',
			'lora' => 'Lora',
			'love_ya_like_a_sister' => 'Love Ya Like A Sister',
			'loved_by_the_king' => 'Loved by the King',
			'lovers_quarrel' => 'Lovers Quarrel',
			'luckiest_guy' => 'Luckiest Guy',
			'lusitana' => 'Lusitana',
			'lustria' => 'Lustria',
			'macondo' => 'Macondo',
			'macondo_swash_caps' => 'Macondo Swash Caps',
			'magra' => 'Magra',
			'maiden_orange' => 'Maiden Orange',
			'mako' => 'Mako',
			'mallanna' => 'Mallanna',
			'mandali' => 'Mandali',
			'marcellus' => 'Marcellus',
			'marcellus_sc' => 'Marcellus SC',
			'marck_script' => 'Marck Script',
			'margarine' => 'Margarine',
			'marko_one' => 'Marko One',
			'marmelad' => 'Marmelad',
			'marvel' => 'Marvel',
			'mate' => 'Mate',
			'mate_sc' => 'Mate SC',
			'maven_pro' => 'Maven Pro',
			'mclaren' => 'McLaren',
			'meddon' => 'Meddon',
			'medievalsharp' => 'MedievalSharp',
			'medula_one' => 'Medula One',
			'megrim' => 'Megrim',
			'meie_script' => 'Meie Script',
			'merienda' => 'Merienda',
			'merienda_one' => 'Merienda One',
			'merriweather' => 'Merriweather',
			'merriweather_sans' => 'Merriweather Sans',
			'metal_mania' => 'Metal Mania',
			'metamorphous' => 'Metamorphous',
			'metrophobic' => 'Metrophobic',
			'michroma' => 'Michroma',
			'milonga' => 'Milonga',
			'miltonian' => 'Miltonian',
			'miltonian_tattoo' => 'Miltonian Tattoo',
			'miniver' => 'Miniver',
			'miss_fajardose' => 'Miss Fajardose',
			'modern_antiqua' => 'Modern Antiqua',
			'molengo' => 'Molengo',
			'molle' => 'Molle',
			'monda' => 'Monda',
			'monofett' => 'Monofett',
			'monoton' => 'Monoton',
			'monsieur_la_doulaise' => 'Monsieur La Doulaise',
			'montaga' => 'Montaga',
			'montez' => 'Montez',
			'montserrat' => 'Montserrat',
			'montserrat_alternates' => 'Montserrat Alternates',
			'montserrat_subrayada' => 'Montserrat Subrayada',
			'mountains_of_christmas' => 'Mountains of Christmas',
			'mouse_memoirs' => 'Mouse Memoirs',
			'mr_bedfort' => 'Mr Bedfort',
			'mr_dafoe' => 'Mr Dafoe',
			'mr_de_haviland' => 'Mr De Haviland',
			'mrs_saint_delafield' => 'Mrs Saint Delafield',
			'mrs_sheppards' => 'Mrs Sheppards',
			'muli' => 'Muli',
			'mystery_quest' => 'Mystery Quest',
			'ntr' => 'NTR',
			'neucha' => 'Neucha',
			'neuton' => 'Neuton',
			'new_rocker' => 'New Rocker',
			'news_cycle' => 'News Cycle',
			'niconne' => 'Niconne',
			'nixie_one' => 'Nixie One',
			'nobile' => 'Nobile',
			'norican' => 'Norican',
			'nosifer' => 'Nosifer',
			'nothing_you_could_do' => 'Nothing You Could Do',
			'noticia_text' => 'Noticia Text',
			'noto_sans' => 'Noto Sans',
			'noto_serif' => 'Noto Serif',
			'nova_cut' => 'Nova Cut',
			'nova_flat' => 'Nova Flat',
			'nova_mono' => 'Nova Mono',
			'nova_oval' => 'Nova Oval',
			'nova_round' => 'Nova Round',
			'nova_script' => 'Nova Script',
			'nova_slim' => 'Nova Slim',
			'nova_square' => 'Nova Square',
			'numans' => 'Numans',
			'nunito' => 'Nunito',
			'offside' => 'Offside',
			'old_standard_tt' => 'Old Standard TT',
			'oldenburg' => 'Oldenburg',
			'oleo_script' => 'Oleo Script',
			'oleo_script_swash_caps' => 'Oleo Script Swash Caps',
			'open_sans' => 'Open Sans',
			'open_sans_condensed' => 'Open Sans Condensed',
			'oranienbaum' => 'Oranienbaum',
			'orbitron' => 'Orbitron',
			'oregano' => 'Oregano',
			'orienta' => 'Orienta',
			'original_surfer' => 'Original Surfer',
			'oswald' => 'Oswald',
			'over_the_rainbow' => 'Over the Rainbow',
			'overlock' => 'Overlock',
			'overlock_sc' => 'Overlock SC',
			'ovo' => 'Ovo',
			'oxygen' => 'Oxygen',
			'oxygen_mono' => 'Oxygen Mono',
			'pt_mono' => 'PT Mono',
			'pt_sans' => 'PT Sans',
			'pt_sans_caption' => 'PT Sans Caption',
			'pt_sans_narrow' => 'PT Sans Narrow',
			'pt_serif' => 'PT Serif',
			'pt_serif_caption' => 'PT Serif Caption',
			'pacifico' => 'Pacifico',
			'paprika' => 'Paprika',
			'parisienne' => 'Parisienne',
			'passero_one' => 'Passero One',
			'passion_one' => 'Passion One',
			'pathway_gothic_one' => 'Pathway Gothic One',
			'patrick_hand' => 'Patrick Hand',
			'patrick_hand_sc' => 'Patrick Hand SC',
			'patua_one' => 'Patua One',
			'paytone_one' => 'Paytone One',
			'peralta' => 'Peralta',
			'permanent_marker' => 'Permanent Marker',
			'petit_formal_script' => 'Petit Formal Script',
			'petrona' => 'Petrona',
			'philosopher' => 'Philosopher',
			'piedra' => 'Piedra',
			'pinyon_script' => 'Pinyon Script',
			'pirata_one' => 'Pirata One',
			'plaster' => 'Plaster',
			'play' => 'Play',
			'playball' => 'Playball',
			'playfair_display' => 'Playfair Display',
			'playfair_display_sc' => 'Playfair Display SC',
			'podkova' => 'Podkova',
			'poiret_one' => 'Poiret One',
			'poller_one' => 'Poller One',
			'poly' => 'Poly',
			'pompiere' => 'Pompiere',
			'pontano_sans' => 'Pontano Sans',
			'port_lligat_sans' => 'Port Lligat Sans',
			'port_lligat_slab' => 'Port Lligat Slab',
			'prata' => 'Prata',
			'press_start_2p' => 'Press Start 2P',
			'princess_sofia' => 'Princess Sofia',
			'prociono' => 'Prociono',
			'prosto_one' => 'Prosto One',
			'puritan' => 'Puritan',
			'purple_purse' => 'Purple Purse',
			'quando' => 'Quando',
			'quantico' => 'Quantico',
			'quattrocento' => 'Quattrocento',
			'quattrocento_sans' => 'Quattrocento Sans',
			'questrial' => 'Questrial',
			'quicksand' => 'Quicksand',
			'quintessential' => 'Quintessential',
			'qwigley' => 'Qwigley',
			'racing_sans_one' => 'Racing Sans One',
			'radley' => 'Radley',
			'rajdhani' => 'Rajdhani',
			'raleway' => 'Raleway',
			'raleway_dots' => 'Raleway Dots',
			'ramabhadra' => 'Ramabhadra',
			'rambla' => 'Rambla',
			'rammetto_one' => 'Rammetto One',
			'ranchers' => 'Ranchers',
			'rancho' => 'Rancho',
			'rationale' => 'Rationale',
			'redressed' => 'Redressed',
			'reenie_beanie' => 'Reenie Beanie',
			'revalia' => 'Revalia',
			'ribeye' => 'Ribeye',
			'ribeye_marrow' => 'Ribeye Marrow',
			'righteous' => 'Righteous',
			'risque' => 'Risque',
			'roboto' => 'Roboto',
			'roboto_condensed' => 'Roboto Condensed',
			'roboto_slab' => 'Roboto Slab',
			'rochester' => 'Rochester',
			'rock_salt' => 'Rock Salt',
			'rokkitt' => 'Rokkitt',
			'romanesco' => 'Romanesco',
			'ropa_sans' => 'Ropa Sans',
			'rosario' => 'Rosario',
			'rosarivo' => 'Rosarivo',
			'rouge_script' => 'Rouge Script',
			'rozha_one' => 'Rozha One',
			'rubik_mono_one' => 'Rubik Mono One',
			'rubik_one' => 'Rubik One',
			'ruda' => 'Ruda',
			'rufina' => 'Rufina',
			'ruge_boogie' => 'Ruge Boogie',
			'ruluko' => 'Ruluko',
			'rum_raisin' => 'Rum Raisin',
			'ruslan_display' => 'Ruslan Display',
			'russo_one' => 'Russo One',
			'ruthie' => 'Ruthie',
			'rye' => 'Rye',
			'sacramento' => 'Sacramento',
			'sail' => 'Sail',
			'salsa' => 'Salsa',
			'sanchez' => 'Sanchez',
			'sancreek' => 'Sancreek',
			'sansita_one' => 'Sansita One',
			'sarina' => 'Sarina',
			'sarpanch' => 'Sarpanch',
			'satisfy' => 'Satisfy',
			'scada' => 'Scada',
			'schoolbell' => 'Schoolbell',
			'seaweed_script' => 'Seaweed Script',
			'sevillana' => 'Sevillana',
			'seymour_one' => 'Seymour One',
			'shadows_into_light' => 'Shadows Into Light',
			'shadows_into_light_two' => 'Shadows Into Light Two',
			'shanti' => 'Shanti',
			'share' => 'Share',
			'share_tech' => 'Share Tech',
			'share_tech_mono' => 'Share Tech Mono',
			'shojumaru' => 'Shojumaru',
			'short_stack' => 'Short Stack',
			'sigmar_one' => 'Sigmar One',
			'signika' => 'Signika',
			'signika_negative' => 'Signika Negative',
			'simonetta' => 'Simonetta',
			'sintony' => 'Sintony',
			'sirin_stencil' => 'Sirin Stencil',
			'six_caps' => 'Six Caps',
			'skranji' => 'Skranji',
			'slabo_13px' => 'Slabo 13px',
			'slabo_27px' => 'Slabo 27px',
			'slackey' => 'Slackey',
			'smokum' => 'Smokum',
			'smythe' => 'Smythe',
			'sniglet' => 'Sniglet',
			'snippet' => 'Snippet',
			'snowburst_one' => 'Snowburst One',
			'sofadi_one' => 'Sofadi One',
			'sofia' => 'Sofia',
			'sonsie_one' => 'Sonsie One',
			'sorts_mill_goudy' => 'Sorts Mill Goudy',
			'source_code_pro' => 'Source Code Pro',
			'source_sans_pro' => 'Source Sans Pro',
			'source_serif_pro' => 'Source Serif Pro',
			'special_elite' => 'Special Elite',
			'spicy_rice' => 'Spicy Rice',
			'spinnaker' => 'Spinnaker',
			'spirax' => 'Spirax',
			'squada_one' => 'Squada One',
			'stalemate' => 'Stalemate',
			'stalinist_one' => 'Stalinist One',
			'stardos_stencil' => 'Stardos Stencil',
			'stint_ultra_condensed' => 'Stint Ultra Condensed',
			'stint_ultra_expanded' => 'Stint Ultra Expanded',
			'stoke' => 'Stoke',
			'strait' => 'Strait',
			'sue_ellen_francisco' => 'Sue Ellen Francisco',
			'sunshiney' => 'Sunshiney',
			'supermercado_one' => 'Supermercado One',
			'swanky_and_moo_moo' => 'Swanky and Moo Moo',
			'syncopate' => 'Syncopate',
			'tangerine' => 'Tangerine',
			'tauri' => 'Tauri',
			'teko' => 'Teko',
			'telex' => 'Telex',
			'tenor_sans' => 'Tenor Sans',
			'text_me_one' => 'Text Me One',
			'the_girl_next_door' => 'The Girl Next Door',
			'tienne' => 'Tienne',
			'tinos' => 'Tinos',
			'titan_one' => 'Titan One',
			'titillium_web' => 'Titillium Web',
			'trade_winds' => 'Trade Winds',
			'trocchi' => 'Trocchi',
			'trochut' => 'Trochut',
			'trykker' => 'Trykker',
			'tulpen_one' => 'Tulpen One',
			'ubuntu' => 'Ubuntu',
			'ubuntu_condensed' => 'Ubuntu Condensed',
			'ubuntu_mono' => 'Ubuntu Mono',
			'ultra' => 'Ultra',
			'uncial_antiqua' => 'Uncial Antiqua',
			'underdog' => 'Underdog',
			'unica_one' => 'Unica One',
			'unifrakturcook' => 'UnifrakturCook',
			'unifrakturmaguntia' => 'UnifrakturMaguntia',
			'unkempt' => 'Unkempt',
			'unlock' => 'Unlock',
			'unna' => 'Unna',
			'vt323' => 'VT323',
			'vampiro_one' => 'Vampiro One',
			'varela' => 'Varela',
			'varela_round' => 'Varela Round',
			'vast_shadow' => 'Vast Shadow',
			'vesper_libre' => 'Vesper Libre',
			'vibur' => 'Vibur',
			'vidaloka' => 'Vidaloka',
			'viga' => 'Viga',
			'voces' => 'Voces',
			'volkhov' => 'Volkhov',
			'vollkorn' => 'Vollkorn',
			'voltaire' => 'Voltaire',
			'waiting_for_the_sunrise' => 'Waiting for the Sunrise',
			'wallpoet' => 'Wallpoet',
			'walter_turncoat' => 'Walter Turncoat',
			'warnes' => 'Warnes',
			'wellfleet' => 'Wellfleet',
			'wendy_one' => 'Wendy One',
			'wire_one' => 'Wire One',
			'yanone_kaffeesatz' => 'Yanone Kaffeesatz',
			'yellowtail' => 'Yellowtail',
			'yeseva_one' => 'Yeseva One',
			'yesteryear' => 'Yesteryear',
			'zeyada' => 'Zeyada',
		);
	}
}
