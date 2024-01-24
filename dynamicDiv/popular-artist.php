 <div class="artists-container">
 <?php 
 include("artist.php");

    $sql="select * from artist";
    $artistResult=mysqli_query($conn,$sql);
    $artists=[];
    while ($row = mysqli_fetch_assoc($artistResult)) {
        $artist = new Artist(
            $row['ID'],
            $row['coverPhoto'],
            $row['emri'],
            $row['description'],
            $row['readMore']
        );
        $artists[] = $artist;
    }
    foreach($artists as $artist){
        $artist->displayArtist();
    }
 
 ?>
            <!-- <div class="artists-artist">
                <img src="Artists/Eminem.jpg">
                <div class="artists-description">
                    <h2>Eminem</h2>
                    <p>Rapper, actor and music producer Eminem is one of the best-selling musicians of the 21st century and one of the most influential rappers of all time.
                        Born Marshall Bruce Mathers III in 1972 in Missouri, Eminem had a turbulent childhood. He dropped out of school in the ninth grade and worked odd jobs
                        until finally making it as a rapper upon the release of The Slim Shady LP in early 1999. The album went multi-platinum, garnering Eminem two Grammy Awards 
                        and four MTV Video Music Awards.</p>
                    <a href="https://www.biography.com/musicians/eminem"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/akon.jpg">
                <div class="artists-description">
                    <h2>Akon</h2>
                    <p>Akon is a Senegalese American singer, songwriter and record producer. He lived in Senegal
                    , West Africa, as a child and attended high school in the United States. He has released several hit albums that combine his
                     R&B-style vocals with hip-hop beats, and he has collaborated with many other musicians
                    , including Snoop Dogg, Gwen Stefani, Lionel Richie and Michael Jackson</p>
                    <a href="https://www.biography.com/musicians/akon">
                        <input type="button" value="Read More" id="artists-info">
                    </a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/elai.jpg">
                <div class="artists-description">
                    <h2>Elai</h2>
                    <p>Elai (born 4 March 1999) is an Albanian rapper, producer and songwriter.Elai, was born on 4 March 1999 into an Albanian family. He belongs to prezidente crew.His singles, "Paranormal" and "Lale", occurred within the Albanian Top 100 in October 2021 
                        and reached the top 10, respectively, although "Lale" continued its success abroad and peaked at number 88 in Switzerland.</p>
                    <a href="https://en.wikipedia.org/wiki/Elai_(rapper)"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/dua-lipa.jpg">
                <div class="artists-description">
                    <h2>Dua Lipa</h2>
                    <p>Dua Lipa, (born August 22, 1995, London, England), British-Albanian singer, model, and entrepreneur. The Grammy Award-winning artist
                         rose to prominence with her distinctively husky voice and songs that mix 1970s disco, ’80s pop, and ’90s club music.</p>
                    <a href="https://www.britannica.com/biography/Dua-Lipa"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/billie-eilish.jpg">
                <div class="artists-description">
                    <h2>Billie Eilish</h2>
                    <p>Billie Eilish, (born December 18, 2001, Los Angeles, California, U.S.), American singer-songwriter who first gained 
                        recognition in 2015 for the song “Ocean Eyes” and became, in 2020, the youngest person ever to win a Grammy for album of the year.</p>
                    <a href="https://www.britannica.com/biography/Billie-Eilish"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/taylor-swift.jpg">
                <div class="artists-description">
                    <h2>Taylor Swift</h2>
                    <p>Taylor Swift, (born December 13, 1989, West Reading, Pennsylvania, U.S.), American pop and country music singer-songwriter whose tales of young heartache achieved widespread success in the early 21st century.</p>
                    <a href="https://www.britannica.com/biography/Taylor-Swift"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/queen.jpg">
                <div class="artists-description">
                    <h2>Queen</h2>
                    <p>Queen, British rock band whose fusion of heavy metal, glam rock, and camp theatrics made it one of the most popular groups of the 1970s. Although generally dismissed by critics, 
                        Queen crafted an elaborate blend of layered guitar
                        work by virtuoso Brian May and overdubbed vocal harmonies enlivened by the flamboyant performance of front man and principal songwriter Freddie Mercury. </p>
                    <a href="https://www.britannica.com/topic/Queen-British-rock-group"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/rihanna.jpg">
                <div class="artists-description">
                    <h2>Rihanna</h2>
                    <p>Rihanna, (born February 20, 1988, St. Michael parish, Barbados), Barbadian pop and rhythm-and-blues (R&B) singer who became a worldwide star in the early 21st century, known for her distinctive 
                        and versatile voice and for her fashionable appearance. She was also known for her beauty and fashion lines. Fenty grew up in 
                        Barbados with a Barbadian father and a Guyanese mother. As a child, she listened to Caribbean music, such as reggae, as well as American hip-hop and R&B.</p>
                    <a href="https://www.britannica.com/biography/Rihanna"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/lady-gaga.jpg">
                <div class="artists-description">
                    <h2>Lady Gaga</h2>
                    <p>Lady Gaga, (born March 28, 1986, New York City, New York, U.S.), American singer-songwriter and performance artist, known for her flamboyant costumes, provocative lyrics, 
                        and strong vocal talents, who achieved enormous popular success with songs such as “Just Dance,” “Bad Romance,” and “Born This Way.”</p>
                    <a href="https://www.britannica.com/biography/Lady-Gaga"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/adele.webp">
                <div class="artists-description">
                    <h2>Adele</h2>
                    <p>Adele, (born May 5, 1988, Tottenham, London, England), English pop singer and songwriter whose soulful emotive voice and traditionally crafted songs made her one of the most broadly popular 
                        performers of her generation. Adkins was raised by a young single mother in various working-class neighbourhoods of London.</p>
                    <a href="https://www.britannica.com/biography/Adele"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/beyonce.webp">
                <div class="artists-description">
                    <h2>Beyonce</h2>
                    <p>Beyoncé, (born September 4, 1981, Houston, Texas, U.S.), American singer-songwriter and actress who achieved fame in the late 1990s as the lead singer of the R&B group Destiny’s 
                       Child and then launched a hugely successful solo career. She won a record-setting 32 Grammy Awards.</p>
                    <a href="https://www.britannica.com/biography/Beyonce"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/shawn-mendes.jpg">
                <div class="artists-description">
                    <h2>Shawn Mendes</h2>
                    <p>Shawn Mendes is a Canadian pop singer and songwriter. After uploading a series of his cover versions to various video-sharing sites (beginning with the now-defunct application Vine in 2012), 
                        Mendes earned a dedicated following that he cultivated through social media outlets.</p>
                    <a href="https://www.biography.com/musicians/shawn-mendes"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/camila-cabello.jpg">
                <div class="artists-description">
                    <h2>Camila Cabello</h2>
                    <p>After getting her start with supergroup Fifth Harmony, the Cuban-born singer-songwriter exploded onto the scene with last year's chart-topping single "Havana." Her solo album, "Camila," 
                        debuted in January 2018 atop the Billboard 200, making her the first artist in 15 years to hold the top spot on the singles and albums charts simultaneously.</p>
                    <a href="https://en.wikipedia.org/wiki/Camila_Cabello"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/drake.jpg">
                <div class="artists-description">
                    <h2>Drake</h2>
                    <p>Drake, (born October 24, 1986, Toronto, Ontario, Canada), Canadian rap musician who first gained fame as an actor on the acclaimed TV teenage drama series Degrassi: 
                        The Next Generation and went on to a successful and influential music career. 
                        His trademark mixture of singing and lyrical rapping and of braggadocio juxtaposed with raw vulnerability won him a large following.</p>
                    <a href="https://www.britannica.com/biography/Drake"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/dhurata-dora.jpg">
                <div class="artists-description">
                    <h2>Dhurata Dora</h2>
                    <p>Dhurata Dora (Born 24 December 1992) is a Kosovo-Albanian singer and songwriter.
                        Dhurata Murturi was born into an Albanian family in the city of Nuremberg in Bavaria, Germany.[1] She went to elementary school in the town of Fürth. She started singing as a young woman under the name Dhurata Dora. 
                        She began her music career in Kosovo, where she released her first single and music video in 2011, "Vete kërkove".</p>
                    <a href="https://en.wikipedia.org/wiki/Dhurata_Dora"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/elvana-gjata.jpg">
                <div class="artists-description">
                    <h2>Elvana Gjata</h2>
                    <p>Elvana Gjata (Born 3 February 1987) is an Albanian singer, songwriter and entrepreneur.Born and raised in Tirana, she has been referred to as a "Diva of Albanian music".She rose to recognition in Albania and other 
                        Albanian-speaking territories in the Balkans following the release of her two studio albums, Mamës (2007) and Afër dhe larg (2011).</p>
                    <a href="https://en.wikipedia.org/wiki/Elvana_Gjata"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/noizy.png">
                <div class="artists-description">
                    <h2>Noizy</h2>
                    <p>Rigels Rajku (Born 27 September 1986), known professionally as Noizy, is an Albanian rapper.Rigels Rajku was born on 27 September 1986 into a multi-religious Albanian family in the village of Sukth, then part of the People's
                         Socialist Republic, present Albania.His father is a Muslim from Dibër and his mother a Catholic from Krujë.</p>
                    <a href="https://en.wikipedia.org/wiki/Noizy"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/yll-limani.jpg">
                <div class="artists-description">
                    <h2>Yll Limani</h2>
                    <p>Yll Limani (born 24 September 1994) is a Kosovo-Albanian singer and songwriter.The singer's public singing debut was at the first season of The Voice of Albania in 2011, followed
                         by an appearance on the 9th edition of the Albanian music contest Top Fest in 2012.</p>
                    <a href="https://en.wikipedia.org/wiki/Yll_Limani"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/shpat-kasapi.jpg">
                <div class="artists-description">
                    <h2>Shpat Kasapi</h2>
                    <p>Shpat Kasapi (born 1 May 1985) is an Albanian-Macedonian singer and songwriter.Kasapi participated in Festivali i Këngës 47 for the Eurovision Song Contest 2009.</p>
                    <a href=""><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/teuta-selimi.jpg">
                <div class="artists-description">
                    <h2>Teuta Selimi</h2>
                    <p>Teuta Selimi është këngëtare e njohur.
                        Karriera e saj muzikore u shënua nga përzierja e elementeve të reggae, ska, dhe rocksteady, si dhe falsifikim i një stili të këndshëm dhe të veçantë të vokalit dhe të këngëve. </p>
                    <a href="https://www.teksteshqip.com/teuta-selimi/biografia"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/shyhrete-behluli.jpg">
                <div class="artists-description">
                    <h2>Shyhrete Behluli</h2>
                    <p>Shyhrete Behluli është një këngëtare shumë e njohur dhe muzika ku identifikohet më shumë është ajo popullore moderne, popullore folklorike, popullore dasmash dhe popullore kosovare</p>
                    <a href="https://www.teksteshqip.com/shyhrete-behluli/biografia"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/buta.jpg">
                <div class="artists-description">
                    <h2>Buta</h2>
                    <p>Betim Januzi (born 29 March 1995), known professionally as Buta, is a Kosovo-Albanian rapper.He discovered his passion 
                        for music at an early age and began writing songs at the age of twelve. In 2010 he released his first and only song for that year titled "Guillotine".</p>
                    <a href="https://en.wikipedia.org/wiki/Buta_(rapper)"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/mc-kresha.webp">
                <div class="artists-description">
                    <h2>Mc Kresha</h2>
                    <p>Kreshnik Fazliu (born 5 September 1984), known professionally as MC Kresha, is a Kosovo-Albanian rapper and songwriter. Born and raised in Mitrovica, 
                        Fazliu is credited as a viable hip hop artist in the Albanian-speaking Balkans.</p>
                    <a href="https://en.wikipedia.org/wiki/MC_Kresha"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div>
            <div class="artists-artist">
                <img src="Artists/elita-5.jpg">
                <div class="artists-description">
                    <h2>Elita 5</h2>
                    <p>Elita 5 is an Albanian rock band formed in Tetovë in 1988. The group consisted of vocalist Arif Ziberi was born on May 12, 1968, i Tetova guitarist Mevaip Mustafi, 
                        drummer Besim Ibraimi, bass player Agron Idrizi and keyboardist Nexhat Mujovi.With a heavy rock sound and Albanian influence, the band is considered a pioneer of Albanian rock and their
                        songs have a very large fanbase in Albania.It is one of the bands that marked and indicated the path of Albanian rock music in the post-communism period.</p>
                    <a href="https://en.wikipedia.org/wiki/Elita_5"><input type="button" value="Read More" id="artists-info"></a>
                </div>
            </div> -->
</div>
