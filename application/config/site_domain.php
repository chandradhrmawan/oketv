<?php
/*
| -------------------------------------------------------------------
| SITE DOMAIN
| -------------------------------------------------------------------
| URI to Handle `Read` news,
| eg:
| 1 => 'news.okezone.com'
| if channel is `1`, read item to news.okezone.com/index.php/ReadHistory/[ymd]/1/[id]/[slug-title]
| i know this's not `best-case`
|
*/

// --------------------------------------------- START NEWS SITEMAP ID ---------------------------------------------------

$config['read_domain'] = array(
	1   => 'news.okezone.com',	//	News
	217 => 'news.okezone.com', //liputan khusussss
	223 => 'news.okezone.com', //Berita dari anda
	228 => 'news.okezone.com', // Berita Dari Anda
	229 => 'news.okezone.com', // rilis berita dari anda
	230 => 'news.okezone.com', // berita, berita dari anda
	283 => 'suar.okezone.com', // fokus
	285 => 'suar.okezone.com', //resensi
	235 => 'news.okezone.com', //Seputar Indonesia Pagi
	236 => 'news.okezone.com', //Seputar Indonesia
	237 => 'news.okezone.com', //Seputar Indonesia Siang
	238 => 'news.okezone.com', //MNC News
	337 => 'news.okezone.com', //Nasional
	338 => 'news.okezone.com', //Megapolitan
	339 => 'news.okezone.com', //Polhukam
	340 => 'news.okezone.com', //Nusantara
	341 => 'news.okezone.com', //One Shot
	342 => 'news.okezone.com', //Ten Questions
	343 => 'news.okezone.com', //Bingkai
	344 => 'news.okezone.com', //Analisis
	345 => 'news.okezone.com', //etalase
	551 => 'news.okezone.com', //cerpen
	542 => 'news.okezone.com', //news ADV
	18  => 'news.okezone.com',	//international
	214 => 'news.okezone.com', //jagad unik
	411 => 'news.okezone.com', //Asia Tenggara
	412 => 'news.okezone.com', //Timur Tengah
	413 => 'news.okezone.com', //Asia
	414 => 'news.okezone.com', //Dunia
	536 => 'news.okezone.com', //US Election
	537 => 'news.okezone.com', //	Amerika Memilih
	538 => 'news.okezone.com', //	Sejarah
	539 => 'news.okezone.com', //	Analisa Politik
	540 => 'news.okezone.com', //Presiden Amerika
	541 => 'news.okezone.com', //	Kandidatt

	15	=> 'news.okezone.com', //Autos
	52	=> 'news.okezone.com', //Mobil
	53	=> 'news.okezone.com', //Motor
	85	=> 'news.okezone.com', //Modifikasi
	86	=> 'news.okezone.com', //Autotainment
	87	=> 'news.okezone.com', //Autos - Tips & Trik
	199	=> 'news.okezone.com', //Autoclub
	257	=> 'news.okezone.com', //Konsultasi Astraworld
	286	=> 'news.okezone.com', //Konsultasi TOP 1
	312	=> 'news.okezone.com', //MODIFIKASI
	347 => 'news.okezone.com', //suzuki advertorial
	397	=> 'news.okezone.com', //Suzuki Adv2
	364 => 'news.okezone.com/top1', //top1 advertorial
	397	=> 'news.okezone.com', //Suzuki Adv2
	421	=> 'news.okezone.com', //Auto Referensi
	422	=> 'news.okezone.com', //Auto Celebrity
	423	=> 'news.okezone.com', //Auto Tes
	424	=> 'news.okezone.com', //Auto Pedia
	425	=> 'news.okezone.com', //Auto Klusif
	534	=> 'news.okezone.com', //autos adv
	585	=> 'news.okezone.com', //Bengkel Rekomendasi
	586	=> 'news.okezone.com', //Body Repair
	587	=> 'news.okezone.com', //Audio
	588	=> 'news.okezone.com', //Ban

	499	=> 'news.okezone.com', // Jakarta
	500 => 'news.okezone.com', // jakarta raya
	501 => 'news.okezone.com', //	greater jakarta
	502 => 'news.okezone.com', //	jagoan kite
	503	=> 'news.okezone.com', // warga kite
	504	=> 'news.okezone.com', // kampung kite
	505	=> 'news.okezone.com', // pilgub jakarta
	506	=> 'news.okezone.com', // tanya jawab
	507	=> 'news.okezone.com', // profile gubernur
	508	=> 'news.okezone.com', // calon pemimpin

	509 => 'news.okezone.com', // Jawa Tengah
	510	=> 'news.okezone.com', // Jogja
	511	=> 'news.okezone.com', // Solo
	512	=> 'news.okezone.com', //Semarang
	513	=> 'news.okezone.com', //Greater Jateng
	514	=> 'news.okezone.com', //Industri Kreatif
	515	=> 'news.okezone.com', //Budaya
	516	=> 'news.okezone.com', //Pendidikan
	517	=> 'news.okezone.com', //Angkringan


	518	=> 'news.okezone.com', // Jawa Timur
	519	=> 'news.okezone.com', // Surabaya
	520	=> 'news.okezone.com', // Malang
	521	=> 'news.okezone.com', // Greater Jatim
	522	=> 'news.okezone.com', // Babad Jawi
	523	=> 'news.okezone.com', // Ekbis
	524	=> 'news.okezone.com', // Cangkrukan


	525	=> 'news.okezone.com', // Bandung
	526	=> 'news.okezone.com', // Bandung Raya
	527	=> 'news.okezone.com', // Greater Bandung
	528	=> 'news.okezone.com', // Jelajah Bandung
	529	=> 'news.okezone.com', // Saur Abdi Mah
	530	=> 'news.okezone.com', // Kabar Gedung Sate

	65	=> 'news.okezone.com', //Suara Kampus
	95	=> 'news.okezone.com', //Akademika
	99	=> 'news.okezone.com', //Profil Mahasiswa
	100	=> 'news.okezone.com', //Pers Kampus
	367	=> 'news.okezone.com',
	368	=> 'news.okezone.com',
	369	=> 'news.okezone.com',
	370	=> 'news.okezone.com',
	371	=> 'news.okezone.com',
	372	=> 'news.okezone.com',
	373	=> 'news.okezone.com',
	417 => 'news.okezone.com',
	560 => 'news.okezone.com', //High School
	562 => 'news.okezone.com', //Ekspresi
	563 => 'news.okezone.com', //Katalog Kampus

	// 	domain ini sebenernya ke tokohdev.okezone.com tapi agak sedikit bingung tokoh itu masuk nya ke tokohdev.okezone.com or news.okezone.com/tokoh
	//	untuk sementara si tokoh ini di masukan ke kanal news.okezone.com
	// ---------------------------------------------------------------------------------------------------------------
	17	=> 'news.okezone.com',	//Tokoh
	154	=> 'news.okezone.com',	//Tokoh - Hukum
	155	=> 'news.okezone.com',	//Tokoh - Bisnis
	156	=> 'news.okezone.com',	//Tokoh - Celebrity
	157	=> 'news.okezone.com',	//Tokoh - Sport
	158	=> 'news.okezone.com',	//Tokoh - Politik
	159	=> 'news.okezone.com',	//Tokoh - Sains

	// ---------------------------------------------------------------------------------------------------------------


	// --------------------------------------------- END NEWS SITEMAP ID ---------------------------------------------------



	// --------------------------------------------- START SPORTS SITEMAP ID ---------------------------------------------------
	2   => 'sports.okezone.com', 		//	Sport
	36  => 'sports.okezone.com', //	Basket
	37	=> 'sports.okezone.com', //F1 & A1
	38	=> 'sports.okezone.com', //MotoGP
	39	=> 'sports.okezone.com', //Tenis
	40	=> 'sports.okezone.com', //Bulutangkis
	41	=> 'sports.okezone.com', //Tinju
	42	=> 'sports.okezone.com', //Golf
	43	=> 'sports.okezone.com', //Sport Lain
	44	=> 'sports.okezone.com', //Sportainment
	136	=> 'sports.okezone.com', //Ulasan Sport
	251	=> 'sports.okezone.com', //PON KalTim
	252	=> 'sports.okezone.com', //Bintang PON
	253	=> 'sports.okezone.com', //Seputar PON
	254	=> 'sports.okezone.com', //Olimpiade
	255	=> 'sports.okezone.com', //Bintang Olimpiade
	256	=> 'sports.okezone.com', //Seputar Olimpiade
	263	=> 'sports.okezone.com', //on sports
	365	=> 'sports.okezone.com', //Profile F1
	366	=> 'sports.okezone.com', //Profile MotoGP
	432	=> 'sports.okezone.com', //Man Of The Week Sport
	433	=> 'sports.okezone.com', //At Glace Sports
	459	=> 'sports.okezone.com', //Konstruktor
	460	=> 'sports.okezone.com', //Pembalap
	462	=> 'sports.okezone.com', //Sea Games
	463	=> 'sports.okezone.com', //Modo Midi SeaGames
	464	=> 'sports.okezone.com', //Merah Putih SeaGames
	// --------------------------------------------- END SPORTS SITEMAP ID ---------------------------------------------------


	// --------------------------------------------- START ECONOMY SITEMAP ID ---------------------------------------------------
	11	=> 'economy.okezone.com', //Economy
	19	=> 'economy.okezone.com', //Sektor Riil
	20	=> 'economy.okezone.com', //Fiskal & Moneter
	21	=> 'economy.okezone.com', //Finance
	22	=> 'economy.okezone.com', //Kisah Sukses
	23	=> 'economy.okezone.com', //Strategi Pemasaran
	190	=> 'economy.okezone.com', //Kons. Karier Jobstreet
	191	=> 'economy.okezone.com', //Kons. Transaksi Keuangan Natsir Kongah
	192	=> 'economy.okezone.com', //Kons. Wealth Mgmt NISP
	193	=> 'economy.okezone.com', //Kons Saham Bhakti Securities
	209	=> 'economy.okezone.com', //Rendevouz
	210	=> 'economy.okezone.com', //glossarium
	212	=> 'economy.okezone.com', //kolom ekonomi
	213	=> 'economy.okezone.com', //ekonomi elobal
	219	=> 'economy.okezone.com', // Kons Pemasaran
	277	=> 'economy.okezone.com',
	278	=> 'economy.okezone.com',
	279	=> 'economy.okezone.com',
	315	=> 'economy.okezone.com', //Personal Finance
	316	=> 'economy.okezone.com', //Syariah
	317	=> 'economy.okezone.com', //Pajak
	318	=> 'economy.okezone.com', //Komentar Pasar
	319	=> 'economy.okezone.com', //Analisa Emiten
	320	=> 'economy.okezone.com', //Industri
	322	=> 'economy.okezone.com', //Kons. Pajak
	323	=> 'economy.okezone.com', //Kons. Personal Finance
	426	=> 'economy.okezone.com', //Kons. Personal Finance
	455 => 'economy.okezone.com',
	456 => 'economy.okezone.com',
	457	=> 'economy.okezone.com',
	461	=> 'economy.okezone.com',

	470	=> 'economy.okezone.com', //Property
	471	=> 'economy.okezone.com', //News Property
	472	=> 'economy.okezone.com', //Housing
	473	=> 'economy.okezone.com', //Apartement
	474	=> 'economy.okezone.com', //Landmark
	475	=> 'economy.okezone.com', //Sub Urban
	476	=> 'economy.okezone.com', //Overseas
	477	=> 'economy.okezone.com', //Design Interior
	478	=> 'economy.okezone.com', //Home And Build
	479	=> 'economy.okezone.com', //Arsitektur
	480	=> 'economy.okezone.com', //Feng Shui
	491	=> 'economy.okezone.com', //Konsultasi Arsitek
	492	=> 'economy.okezone.com', //Konsultasi Design Interior
	493	=> 'economy.okezone.com', //Konsultasi KPR
	494	=> 'economy.okezone.com', //Konsultasi FengShui


	// --------------------------------------------- END ECONOMY SITEMAP ID ---------------------------------------------------


	// --------------------------------------------- START LIFESTYLE SITEMAP ID ---------------------------------------------------
	12	=> 'lifestyle.okezone.com',// Lifestyle
	24	=> 'lifestyle.okezone.com', //Seksualitas
	25	=> 'lifestyle.okezone.com', //Travel
	26	=> 'lifestyle.okezone.com', //Food & Resto
	27	=> 'lifestyle.okezone.com', //Kesehatan
	28	=> 'lifestyle.okezone.com', //Info Produk
	29	=> 'lifestyle.okezone.com', //Trend
	30	=> 'lifestyle.okezone.com', //Griya
	31	=> 'lifestyle.okezone.com', //Horoskop
	32	=> 'lifestyle.okezone.com', //Resensi Buku
	77	=> 'lifestyle.okezone.com', //Kilas Buku
	78	=> 'lifestyle.okezone.com', // Jakarta Underground
	79	=> 'lifestyle.okezone.com', //Kons. Taruna K Kusmayadi
	80	=> 'lifestyle.okezone.com', //Kons. Dr. Adhiarta, MD
	81	=> 'lifestyle.okezone.com', //Kons. Dr. Deby Susanti Vinski
	82	=> 'lifestyle.okezone.com', //Kons. Wulan Tilaar
	83	=> 'lifestyle.okezone.com', //Kons. Rudy Hadisuwarno
	84	=> 'lifestyle.okezone.com', //Kons. Beby Djenar
	194	=> 'lifestyle.okezone.com', //Fashion
	195	=> 'lifestyle.okezone.com', //Salon & SPA
	196	=> 'lifestyle.okezone.com', //Keluarga
	197	=> 'lifestyle.okezone.com', //Metroseksual
	198	=> 'lifestyle.okezone.com', //Karir dan kepribadian
	215	=> 'lifestyle.okezone.com', //Kons. Erwin Hawawinata
	227	=> 'lifestyle.okezone.com', //Kons. OkeSeks
	233	=> 'lifestyle.okezone.com', //Konsultasi Aura
	265	=> 'lifestyle.okezone.com', //  Kons. Kesuma Chandra
	287	=> 'lifestyle.okezone.com', //KLINIK OKEZEKS Dr. O
	399	=> 'lifestyle.okezone.com', //City Sales
	580	=> 'lifestyle.okezone.com', //Hijabers
	581	=> 'lifestyle.okezone.com', //Fashion Police
	582	=> 'lifestyle.okezone.com', //Crown
	583	=> 'lifestyle.okezone.com', //Styleopedia
	584	=> 'lifestyle.okezone.com', //Konsultasi Dokter Galau
	591 => 'lifestyle.okezone.com', // Top List
	578 => 'lifestyle.okezone.com', // Top List
	557 => 'lifestyle.okezone.com', // LIvestyle ADV

	// --------------------------------------------- END LIFESTYLE SITEMAP ID ---------------------------------------------------

	// --------------------------------------------- START CELEBRITY SITEMAP ID ---------------------------------------------------
	13	=> 'celebrity.okezone.com',	//Celebrity
	33	=> 'celebrity.okezone.com',	//Hot Gossip
	34	=> 'celebrity.okezone.com',	//Zig Zag
	35	=> 'celebrity.okezone.com',	//Review Film
	206	=> 'celebrity.okezone.com',	//Berita Film
	211	=> 'celebrity.okezone.com',	//Album Baru
	234	=> 'celebrity.okezone.com',	//Go Spot
	297	=> 'celebrity.okezone.com',	//Video Trailer
	346	=> 'celebrity.okezone.com',	//New Artist Musik
	385 => 'celebrity.okezone.com',	//	New Celeb
	532	=> 'celebrity.okezone.com',	//World Celeb
	533	=> 'celebrity.okezone.com',	//TV Program
	535	=> 'celebrity.okezone.com',	//Celeb Facts
	543	=> 'celebrity.okezone.com',	//Twitter Feed Celebrity
	216	=> 'celebrity.okezone.com',//Deal or No Deal
	218	=> 'celebrity.okezone.com', //DOND Winner

	205	=> 'celebrity.okezone.com', //Musik
	386	=> 'celebrity.okezone.com', //On Stage
	387	=> 'celebrity.okezone.com', //New Comer
	388	=> 'celebrity.okezone.com', //Legend
	389	=> 'celebrity.okezone.com', //Fresh Album
	391	=> 'celebrity.okezone.com', //Music Event
	554	=> 'celebrity.okezone.com', //Music Fact

	// --------------------------------------------- END CELEBRITY SITEMAP ID ---------------------------------------------------


	// --------------------------------------------- START TECHNO SITEMAP ID ---------------------------------------------------
	16	=> 'techno.okezone.com', //Techno
	54	=> 'techno.okezone.com', //Telecommunication
	55	=> 'techno.okezone.com', //Computer & IT
	56	=> 'techno.okezone.com', //Science
	57	=> 'techno.okezone.com', //Gadget
	90	=> 'techno.okezone.com', //Blog & Situs
	91	=> 'techno.okezone.com', //Wired World ?
	92	=> 'techno.okezone.com', //Techno - Tips & Trik
	93	=> 'techno.okezone.com', //Humor Techno
	94	=> 'techno.okezone.com', //CelebrIT
	207	=> 'techno.okezone.com', //webpedia
	208	=> 'techno.okezone.com', //konsultasi techno
	231	=> 'techno.okezone.com', //Konsultasi Komputer & Antivirus
	232	=> 'techno.okezone.com', //Konsultasi Handphone
	314 => 'techno.okezone.com', //Blackberry
	324	=> 'techno.okezone.com', //Hardware
	325	=> 'techno.okezone.com', //Software
	326	=> 'techno.okezone.com',//Game
	363 => 'techno.okezone.com',//Technocrats
	327	=> 'techno.okezone.com', //Kolom Techno
	383	=> 'techno.okezone.com', //techno advertorial
	328	=> 'techno.okezone.com', //video review
	429 => 'techno.okezone.com', // startup
	430 => 'techno.okezone.com', // 140 characters

	// --------------------------------------------- END TECHNO SITEMAP ID ---------------------------------------------------


	// --------------------------------------------- START BOLA SITEMAP ID ---------------------------------------------------
	14	=> 'bola.okezone.com', //Bola
	45	=> 'bola.okezone.com', //Liga Inggris
	46	=> 'bola.okezone.com', //Liga Spanyol
	47	=> 'bola.okezone.com', //Liga Italia
	48	=> 'bola.okezone.com', //Liga Jerman
	49	=> 'bola.okezone.com', //Liga Indonesia
	50	=> 'bola.okezone.com', //Liga Lain
	51	=> 'bola.okezone.com', //Sepakbola Dunia
	135	=> 'bola.okezone.com', //Ulasan Bola
	200	=> 'bola.okezone.com', //Soccertainment
	201	=> 'bola.okezone.com', //Supporter
	202	=> 'bola.okezone.com', //Transfer
	203	=> 'bola.okezone.com', //Soccer Crazy
	204	=> 'bola.okezone.com', //Referee
	261 => 'bola.okezone.com', //liga champions
	262	=> 'bola.okezone.com', //next on
	280	=> 'bola.okezone.com', //goal moment champions
	281	=> 'bola.okezone.com', //champions magazine
	282	=> 'bola.okezone.com', //Prediksi Bola
	284	=> 'bola.okezone.com', //aff 2008
	496	=> 'euro.okezone.com', //Stadium
	497	=> 'euro.okezone.com', //Player
	498	=> 'euro.okezone.com', //Club
	418 => 'bola.okezone.com',
	137	=> 'bola.okezone.com', //Jadwal Pertandingan
	138	=> 'bola.okezone.com', //Klasemen
	139	=> 'bola.okezone.com', //Klasemen Liga Inggris
	140	=> 'bola.okezone.com', //Klasemen Liga Spanyol
	141	=> 'bola.okezone.com', //Klasemen Liga Italia
	142	=> 'bola.okezone.com', //Klasemen F1
	143	=> 'bola.okezone.com', //Klasemen Motogp

	// --------------------------------------------- END BOLA SITEMAP ID ---------------------------------------------------

	58	=> 'suar.okezone.com', //Opini
	59	=> 'suar.okezone.com', //Catatan Redaksi
	60  => 'news.okezone.com', //surat pembaca
	220 => 'news.okezone.com',//kritik dan saran
	221 => 'news.okezone.com',//tanggapan
	61	=> 'news.okezone.com', //Suara Kebon Sirih
	62	=> 'news.okezone.com', //dialog
	63  => 'okezone.com/wisdom', //wisdom
	64	=> 'news.okezone.com', //Humor Gus Dur


	67	=> 'ramadan.okezone.com', // Info Ramadhan
	128	=> 'ramadan.okezone.com', //Tips Berpuasa
	129	=> 'ramadan.okezone.com', //Mutiara Hati
	130	=> 'ramadan.okezone.com', //Jadwal Ceramah
	131	=> 'ramadan.okezone.com', //Jadwal Imsakiyah
	132	=> 'ramadan.okezone.com', //Cerita Sufi
	133	=> 'ramadan.okezone.com', //Hikmah Ramadhan
	134	=> 'ramadan.okezone.com', //Serba Serbi Ramadhan
	258	=> 'ramadan.okezone.com', //Masjid1001
	259	=> 'ramadan.okezone.com', //Almaidah
	260	=> 'ramadan.okezone.com', //jejak wali
	264	=> 'ramadan.okezone.com', //asmaul husnah
	330	=> 'ramadan.okezone.com', //Tausyiah
	331	=> 'ramadan.okezone.com', //Info Zakat
	332	=> 'ramadan.okezone.com', //Konsultasi Zakat
	333	=> 'ramadan.okezone.com', //Sejarah Islam
	334	=> 'ramadan.okezone.com', //Mutiara Ramadan (Video)
	335	=> 'ramadan.okezone.com', //Info Ramadan
	382 => 'ramadan.okezone.com', //tadarus ramadan


	68	=> 'tickerdev.okezone.com', //Ticker


	//69	=> 'showdev.okezone.com', //Reality Show



	144	=> 'info.okezone.com', //Oke Info
	145	=> 'info.okezone.com', //Agenda
	146	=> 'info.okezone.com', //Kedubes
	147	=> 'info.okezone.com', //Telepon Penting
	148	=> 'info.okezone.com', //Hotel
	149	=> 'info.okezone.com', //Pemadam Kebakaran
	150	=> 'info.okezone.com', //Kantor Polisi
	151	=> 'info.okezone.com', //Restoran
	#152	=> 'okeinfo.okezone.com', //Harga Motor
	#153	=> 'okeinfo.okezone.com', //Harga Mobil


	160	=> 'fotodev.okezone.com', //Berita Foto





	222	=> 'awpdev.okezone.com', //Additional_WP



	/*
	290	=> 'englishdev.okezone.com', //English News
	291	=> 'englishdev.okezone.com', //EN National News
	292	=> 'englishdev.okezone.com', //EN International
	293	=> 'englishdev.okezone.com', //EN WorldNews
	294	=> 'englishdev.okezone.com', //EN Business
	295	=> 'englishdev.okezone.com', //EN Entertainment
	296	=> 'englishdev.okezone.com', //EN Sports
	*/
	298	=> 'lifestyle.okezone.com', //Okefood
	299 => 'lifestyle.okezone.com',	//MakanYuk
	300 => 'lifestyle.okezone.com',	//	Jajan Resto
	301	=> 'lifestyle.okezone.com',	//Jajan Cafe-Resto
	302	=> 'lifestyle.okezone.com',	//Pinggir Jalan
	303	=> 'lifestyle.okezone.com',	//International Food
	304	=> 'lifestyle.okezone.com',	//Tips Oke
	305	=> 'lifestyle.okezone.com',	//Kue
	306	=> 'lifestyle.okezone.com',	//Minuman
	307	=> 'lifestyle.okezone.com',	//Makanan
	308	=> 'lifestyle.okezone.com',	//Dessert
	309	=> 'lifestyle.okezone.com',	//Appetizer
	310	=> 'lifestyle.okezone.com',	//Lain-Lain
	311	=> 'lifestyle.okezone.com',	//Resep Pembaca
	378 => 'lifestyle.okezone.com',
	381 => 'lifestyle.okezone.com',
	488 => 'lifestyle.okezone.com',
	489 => 'lifestyle.okezone.com',
	490 => 'lifestyle.okezone.com',
	577 => 'lifestyle.okezone.com',

	350 => 'brasil2014.okezone.com',//	World Cup
	351 => 'brasil2014.okezone.com',	//WC-Man Of The Match
	352 => 'brasil2014.okezone.com', //WC-Offside
	353 => 'brasil2014.okezone.com',	//WC-Soccertainment
	354 => 'brasil2014.okezone.com', //WC-Kata Mereka
	355 => 'brasil2014.okezone.com',	//WC-Next On
	356 => 'brasil2014.okezone.com',	//WC-Prediksi Anda
	357 => 'brasil2014.okezone.com', //WC-History
	358 => 'brasil2014.okezone.com',	//WC-Video Highlights
	359 => 'brasil2014.okezone.com',	//WC-Video Moments
	360 => 'brasil2014.okezone.com', 	//WC-Video Top Goals
	361 => 'brasil2014.okezone.com',	//WC-Did U Know
	362 => 'brasil2014.okezone.com', //	WC-Flashback
	377 => 'brasil2014.okezone.com', //	ADV SOnyericson
	379 => 'brasil2014.okezone.com',
	570 => 'brasil2014.okezone.com',
	571	=> 'brasil2014.okezone.com',
	572	=> 'brasil2014.okezone.com',
	573	=> 'brasil2014.okezone.com',
	574	=> 'brasil2014.okezone.com',
	575	=> 'brasil2014.okezone.com',

	392	=> 'haji.okezone.com', //Info Haji
	393	=> 'haji.okezone.com', //Curhat Haji
	394	=> 'haji.okezone.com', //Tausyiah Haji
	395	=> 'haji.okezone.com', //Baitullah
	396	=> 'haji.okezone.com', //Kaki Langit
	398	=> 'haji.okezone.com',    //Infohaji
	453	=> 'haji.okezone.com',    //Posko Haji

	400	=> 'nataldev.okezone.com', // Natal
	401	=> 'nataldev.okezone.com', //News Natal
	402	=> 'nataldev.okezone.com', //Renungan Natal
	403	=> 'nataldev.okezone.com', //Jadwal Ibadah
	404	=> 'nataldev.okezone.com', //Discount Zone
	405	=> 'nataldev.okezone.com', //Pernik Natal

	406    => 'lifestyle.okezone.com',//	Wisata / Travel
	407	=> 'lifestyle.okezone.com',//Jelajah
	408	=> 'lifestyle.okezone.com',//Indonesiaku
	409	=> 'lifestyle.okezone.com',//Plesir
	410 => 'lifestyle.okezone.com', // my journey
	544	=> 'lifestyle.okezone.com', //themost
	549	=> 'lifestyle.okezone.com', //Travel Zone
	558	=> 'lifestyle.okezone.com', //Travel Advertorial

	481	=> 'lifestyle.okezone.com', //Health
	482	=> 'lifestyle.okezone.com', //Health Update
	483	=> 'lifestyle.okezone.com', //Family Health
	484	=> 'lifestyle.okezone.com', //Natural Healing
	485	=> 'lifestyle.okezone.com', //Sexual Health
	486	=> 'lifestyle.okezone.com', //Health & Fit
	487	=> 'lifestyle.okezone.com', //Konsultasi Health
	495	=> 'lifestyle.okezone.com', //Did You Know Health

	349 => 'kaleidoskopdev.okezone.com',//kaleideskop Kanal
	241 => 'pilkada.okezone.com',  //pilkadut
	242 => 'pilkada.okezone.com', //pilkada jawa tengah
	243 => 'pilkada.okezone.com', //pilkada jawa timur
	244 => 'pilkada.okezone.com', //pilkada bali
	245 => 'pilkada.okezone.com', //pilkada lampung
	246	=> 'pilkada.okezone.com', //analisa pilkada
	247	=> 'pilkada.okezone.com', //pernik pilkada

	// --------------------------------------------- START PEMILU SITEMAP ID ---------------------------------------------------
	266	=> 'pemilu.okezone.com', //pemilu 2009
	267	=> 'pemilu.okezone.com', //pemilihan legislatif
	268	=> 'pemilu.okezone.com', //pemilihan presiden
	269	=> 'pemilu.okezone.com', //podium
	270	=> 'pemilu.okezone.com', //vote getter
	271	=> 'pemilu.okezone.com', //quotes pemilu
	272	=> 'pemilu.okezone.com', //diduknow
	273	=> 'pemilu.okezone.com', //advertorial partai
	274	=> 'pemilu.okezone.com', //ulasan pemilu
	275	=> 'pemilu.okezone.com', //geliat kampanye
	276	=> 'pemilu.okezone.com', //cerita kandidat
	313	=> 'pemilu.okezone.com', //Head to Head Pemilu
	565	=> 'pemilu.okezone.com', //Gosip Politik
	566	=> 'pemilu.okezone.com', //Ceruput
	567	=> 'pemilu.okezone.com', //Kabar Kandidat
	568	=> 'pemilu.okezone.com', //Kabar Pemilu
	569	=> 'pemilu.okezone.com', //Menuju Istana
	// --------------------------------------------- END PEMILU SITEMAP ID ---------------------------------------------------

	3   => 'euro.okezone.com', //Euro 2008
	4   => 'euro.okezone.com', //Feature Euro 2008
	5   => 'euro.okezone.com', //Eurotainment
	6   => 'euro.okezone.com', //Man Of the Match
	7   => 'euro.okezone.com', //Kata Mereka
	8   => 'euro.okezone.com', //Pernik
	9   => 'euro.okezone.com', //Nobar
	10  => 'euro.okezone.com', //History of Euro
	239 => 'euro.okezone.com', //Euro Best Goal
	240 => 'euro.okezone.com', //Euro Moment
	248 => 'euro.okezone.com', //euro match highlights
	249 => 'euro.okezone.com', //euro mania
	250 => 'euro.okezone.com', //Euro Focus
	545 => 'euro.okezone.com', //Live Report Polandia
	546 => 'euro.okezone.com', //Live Report Ukraina
);
