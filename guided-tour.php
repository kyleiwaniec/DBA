<?php

$pagetitle = "Self-Guided Walking Tour - Bordentown City";
require_once("header.php");
?>
<style>
    #nav { position: relative; margin:0 !important;}
    #nav li { float: left; list-style: none}
    #nav a { margin: 5px; padding: 3px 5px; text-decoration: none }
    #nav li.activeSlide a { color: black }
    #nav a:focus { outline: none; }

    #next, #prev{
        cursor:pointer;
        z-index: 998;
        top:300px;
        width:55px;
        height:110px;
        position:absolute;
    }

    #next{
        right:0;
        background:url(images/tour/tour-arrs.png) 0 0 no-repeat;
    }
    .ie7 #next{
        right:-55px;
        background:url(images/tour/tour-arrs-rev.png) 0 -220px no-repeat;
    }
    .ie7 #next:hover{
        background-position:0 -330px;
    }
    #next:hover{
        background-position:0 -110px;
    }
    #prev{
        left:0;
        background:url(images/tour/tour-arrs.png) 0 -220px no-repeat;
    }
    .ie7 #prev{
        left:-55px;
        background:url(images/tour/tour-arrs-rev.png) 0 0 no-repeat;
    }
    .ie7 #prev:hover{
        background-position:0 -110px;
    }
    #prev:hover{
        background-position:0 -330px;
    }
    .arrows{
        position:relative;
        width:950px;
    }

    .inum{
/*        margin-left:-20px;*/
/*        padding:0 10px;*/
        color:#7b0034;
    }
    .iaddy{
        font-family: verdana, sans-serif;
        font-size:12px;
        color:#888888;
    }
    .listings p{
        text-indent:0 !important;
        
    }
    
    .colcount2 p:last-child{
        margin-bottom:0;
    }
    
    
    /*.first.column{
        padding-right:15px;
    }
    .last.column{
        padding-left:15px;
    }*/
    /* Columns-specific stuff */


.colcount2 {
				-webkit-column-width:		300px;
				-moz-column-width:			300px;
				-o-column-width:			300px;	
				-ms-column-width:			300px;
				column-width:				300px;

				-webkit-column-rule-style:	none;
				-moz-column-rule-style:		none;
				-o-column-rule-style:		none;
				-ms-column-rule-style:		none;
				column-rule-style:			none;
                                
                                -moz-column-gap:30px; /* Firefox */
                                -webkit-column-gap:30px; /* Safari and Chrome */
                                -o-column-gap:30px;
                                -ms-column-gap:30px;
                                 column-gap:30px;
			}


</style>
<div class="wrapper">
    <div class="container">
        <div class="breadcrumb">
             <img src="images/hand.png" alt="pointer" /><a href="/"title="home">HOME</a><a href="history.php" title="History">HISTORY</a><span>SELF-GUIDED TOUR</span>
        </div>

        <div class="extended">

            <p class="center"><span class="decorative larger ">Historic</span><br/><span class="serif largest ">BORDENTOWN CITY</span></p>
            <!--<ul id="nav" class="serif larger"></ul>-->
            <div class="arrows" style="text-align:center;margin:auto;width:950px">
                <a href="#"><div id="prev"></div></a> 
                <a href="#" class="nx"><div id="next"></div></a>

            </div>

            <div id="slideshow">
                <div class="borderBox guided-tour">
                    <h1 class="serif center tour-title">Self-Guided Walking Tour</h1>
                    <p class="center">
                        <span><span class="small">Provided by</span><br/>
                            <span class="title">the Bordentown Historical Society</span>

                        </span>
                    </p>
                    <div><p class="center" style="margin:40px auto 0 auto;">I</p></div>
                    <div class="center" style="margin:5px auto 10px auto; width:77px;"><img src="images/small-sep.png" style="display:block;"/></div>

                    <p class="center largest">
                        History <span>of</span>&nbsp;&nbsp;Bordentown Area
                    </p>
                    <div class="center" style="margin:0 auto 10px auto; width:511px;"><img src="images/tour/cover-img.jpg" style="display:block;"/></div>
                    <div class="center" style="text-align: center; margin-top:160px;margin-bottom:-160px;"><img src="events/images/crier.png"/></div>

                </div>
                <div class="borderBox guided-tour">

                    <div class="columns colcount2" >                
                        <p>  <span class="dropcap-tour">I</span>n 1682 Thomas Farnsworth, an English Quaker, moved upriver from Burlington, to make a new home for himself and family on a wind-swept bluff overlooking a broad bend of the Delaware. The area was not entirely a wilderness but it was still new land. Englishman and Quakers had farms located every few miles; but to visit thspan was to traverse pathless forests mostly frequented by Native American and wildlife. About twenty-three families were settled in the area along Black's Creek near Columbus and at Chesterfield. 
                        </p>

                        <p>Farnsworth's Landing, located at the junction of Crosswicks Creek and the Delaware became the center of trade for the region. Joseph Borden, arrived on the scene in 1717. 
                            By 1724 he had acquired nearly the entire site of what is now Bordentown City.
                        </p>

                        <p>Enterprising, progressive, and liberal, Borden (1687-1765), envisioned great things for his Town. By May 1740, he had a line of stage wagons and boats between New York and Philadelphia. Development, however, continued at a slow pace. "Trent's Town", established in 1714, by William Trent and a nearby rival to "Borden's Towne" grew to one hundred houses by 1748. Even this modest growth surpassed "Borden's Towne" sixty houses and equaled older Burlington's development.
                        </p><p>As the colonies population increased, Bordentown's crossroads location attracted many influential visitors as they traveled between New York and Philadelphia. Some became permanent residents, others maintained summer homes cooled by the breezes off the Delaware. The town was not a bystander in the American Revolution. Francis Hopkinson, artist, poet, statesman and signer of the Declaration of Independence, lived at 101 Farnsworth Ave., and his son at 63 Park Street. Colonel Kirkbride and his friend Thomas Paine along with Joseph Borden 11 and Colonel Hoagland were also active in the war for independence. After the "Battle of the Kegs" in 1778, the British plundered the town and burned many homes including the entire block from Park Street to the River, west of Farnsworth. 
                        </p>
                    </div>

                    <div class="center"><img src="images/tour/tour-img1.jpg" alt="" class="tour-img"/></div>

                </div>

                <div class="borderBox guided-tour">

                    <div class="columns colcount2" >                
                        <p>The villagers have long based their claim to fame on the fact that here an exiled King spent "twenty of the happiest years" of his life. In 1816, Joseph Bonaparte, ex-King o/' Naples and Spain, purchased 211 acres of land, later extending to 1700, on the east side of town. The Bonaparte Era (1816-18471 was a bright one. The elaborate estate "Point Breeze", became a center of culture and social life. His guest list often read like a "Who's Who" of the budding republic.
                        </p><p>In 1831, Bonaparte watched steam transportation make it's debut in New Jersey with the "John Bull" chugging along on nearby railroad tracks. By 1834, the Delaware Raritan Canal had opened. In 1871, the Pennsylvania Railroad leased the railroad and canal. They gradually closed the shops and eliminated most of the canal's traffic by refusing to allow goods to be transported in competition to the railroad. The town's property suffered a severe blow. The canal, whose traffic dwindled to a seasonal parade of yachts, closed in 1932. The railroad hauled its last passenger in 1963.
                        </p><p>Bordentown Township was created from Chesterfield Township in 1852. The Borough of Bordentown, established in 1825, separated from the Township when it was chartered as a city in 1867.

                        </p><p>The Township is governed by a five mspanber committee and spanploys a full time administrator and police force. The City changed to a three mspanber commission form of government in 1913 and maintains a paid police force. Both the City and the Township support volunteer fire companies. The two communities operate a joint recreation program and a Regional School District.
                        </p><p>Fieldsboro, was settled in 1683 as the "White Hill Farm" of Marmaduke Hosspanan, later the property of Benjamin Fields. It was incorporated as a borough within the Township of Mainsfeld in 1850. When Bordentown Township was formed in 1852 it included Fieldsboro but the borough separated from the township around 1894.
                        </p><p>As an important junction point between the River shipping and the Camden and Amboy Railroad, Fieldsboro was for a time an important industrial center.
                        </p>
                    </div>
                </div>

                <div class="borderBox guided-tour">
                    <p class="center" style="margin:0 auto;">
                        II
                    </p>
                    <div class="center" style="margin:5px auto 10px auto; width:77px;"><img src="images/small-sep.png" style="display:block;"/></div>

                    <h2 class="center">Bordentown Architecture</h2>
                    <p>&nbsp;</p>
                    <div class="columns colcount2" >                
                        <p><span class="dropcap-tour">B</span>ordentown's 300 year old architectural heritage is comprised of a unique variety of styles dating from the late 1600's through the early 1900's. The earliest dwellings were simple structures whose primary purpose was to provide shelter. Executed in wood or brick, their simplicity of design reflected the English heritage of the Society of Friends (Quakers) who first settled here. As Bordentown became more populated and families grew larger and more wealthy, the town and its buildings assumed a more sophisticated urban character.
                        </p><p>Because Bordentown was an active transportation center linking Philadelphia with New York City, from the early 1800's through the late 1800's, the residents who settled here were conscious of what was architecturally in fashion elsewhere along the eastern seaboard. Those Philadelphians, especially those who spent their summers in Bordentown, contributed an awareness of architecturally popular styles. Joseph Bonaparte and his European entourage added a sense ofworldliness that continued throughout the railroad and canal era of the mid-1800's to the early 1900's. During the profitable time. Bordentown's merchants, factory owners, and professionals expressed their prosperity through grand houses built in the Italian Villa, Italianate Shingle, and Queen Anne styles. Public buildings, the town hall, churches, and banks - also reflected the most popular architectural styles of the day. Middle class residents, to keep up with the times, spanbellished their homes with gingerbread trim and Atlanta brackets. The subsequent dspanise of the railroad and the canal, as well as the routing of two major highways around Bordentown rather than through it, have contributed to the preservation of Bordentown's buildings in a relatively unaltered state.
                        </p><p>As you walk through the streets, note the hitching posts, brick walkways, and various door treatments. Don't ignore the marvelous examples of original cast and wrought iron, popular during most of the 19th century, which abound fences (in the form of wheat sheaves at the Borden House), basspanent window grilles, storefronts (104 Farnsworth) and a front porch (515 Prince Street). You'll quickly discover that Bordentown's past is still very much alive and that the town's buildings are important and irreplaceable reflections of our heritage.
                        </p>

                    </div>
                    <div class="center"><img src="images/tour/tour-img2.gif" alt="" class="tour-img" /></div>
                </div>


                <div class="borderBox guided-tour">
                    <div class="listings">
                        <div class="columns colcount2"> 

                            <p>
                                <span class="inum">1 | Old City Hall</span><br/>
                                <span class="iaddy">11 Crossrwicks Street</span> <br/>
                                Headquarters of the Bordentown Historical Society and Official State Visitors Center. This brick Romanesque like building was the City's second city hall; a town landmark with the Queen Anne clock tower and Seth Thomas clock. The clock is dedicated to the late Bordentonian William F. Allen designer of standard time.
                            </p><p>
                                <span class="inum">2 | St. Mary's Catholic Church</span><br/>
                                <span class="iaddy">45 Crosswicks Street</span><br/>
                                On land purchased from Francis Hopkinson the Catholic Parish erected this Gothic Revival building in 1870. The rose window, heavy buttresses and elaborate tracery are
                                evidences of the Gothic Revival style. Money was raised from a parish fair and special collections.
                                Because surrounding properties could not be purchased at the time of construction. The building was angled from the street line.
                            </p><p>               

                                <span class="inum">3 | B'Nai Abraham Synagogue</span><br/>
                                <span class="iaddy">58 Crosswicks Street</span><br/>
                                The Jewish community has played an important part in the town's history. Moses Wolf, a Jewish tailor, was mayor from 1874 to 1877. AS tire community grew the Jewish residents formed the Bordentown Hebrew Association in 1917. They purchased this double house in 1918 and converted it too Synagogue. Note the beautiful stained glass windows on the first and second levels featuring the Star of David.
                            </p><p>         
                                <span class="inum">4 | Clara Barton Schoolhouse</span><br/>
                                <span class="iaddy">Crosswicks & Burlington Streets</span> <br/>
                                The first successful tax-supported school in NJ, it was here that Clara Barton dspanonstrated in 1852 and 1858 that free public schools would work. The simple gabled building houses many interesting itspans including Miss Barton's original desk. Open by appointment.
                            </p><p>
                                <span class="inum">5 | Monastery of St. Clare</span><br/>
                                <span class="iaddy">Crosswicks Street</span><br/>
                                Originally the Mother House of the Sisters of Mercy, it, cornerstone was laid in 1385. The convent was called St. Joseph's and for many years a Roman Catholic School, open to all creeds, was conducted here. Eventually the property was turned over to the Poor Clares, a cloistered order. The Byzantine type Chapel was added in 1931.
                            </p><p>
                                <span class="inum">6 | The Gilder House</span><br/>
                                <span class="iaddy">Crosswicks Street</span><br/>
                                Richard Watson Gilder (1844-1909) noted poet, author, and editor of Century Magazine was born in this house which was built in two stages. The earlier section c. 1725, was built in the style of an English yeoman's house, the later two-story addition was added in 1788 by Samuel Rodgers. The Gilder Family presented this house and the surrounding 13 acres to the city in 1935. Tours are presented by appointment. -Note the lovely boxwoods surrounding the front yard, wander around back and rest in the quiet city park located behind the house.
                            </p>
                        </div>
                        <div class="center"> <img src="images/tour/tour-img3.gif" alt="B'Nai Abraham Synagogue" title="B'Nai Abraham Synagogue" /></div>

                    </div><!-- listings -->
                </div>

                <div class="borderBox guided-tour">
                    <p class="center"><em>Union Street from Crosswicks to Farnsworth provides the viewer with a variety of architectural influences from post World War 11 Bungalows to Victorians with Eastlake porches and Queen Anne towers. <br/>Take a moment to spot the different styles.
                        </em>  
                        <br/><br/>
                    </p>
                    <div class="listings">
                        <div class="columns colcount2"> 
                            <p>
                                <span class="inum">Number 73</span> is the first Eastlake porch distinguished by its open cut wood trim. The most prominent style on the street is the Bungalow (seen at numbers 62, 50, 48, 47, 45 & 39). An early twentieth century style the Bungalow consists of a 1-1/2 story high house with a large front or encircling porch. Sears Roebuck spread the style by offering several models in its mail order catalogue.
                            </p><p>
                                <span class="inum">Number 63</span> flaunts the Neo Georgian Revival details often seen in the late 19th and early 20th century with its elaborate swan neck pediment over the front door and the dentilated cornice. Houses #56 and 59 are good examples of Sears Roebuck four squares.
                            </p><p>
                                <span class="inum">Both numbers 8 and 4</span> are lovely examples of the Queen Anne style with asymmetric floor plans, a combination of exterior siding materials and decoration, stained glass windows, comical roof towers and large porches. 1, 3 and 5 are simpler examples of the same style.
                            </p><p>
                                <span class="inum">7 | The Bordentown Public Library</span><br/>
                                <span class="iaddy">18 East Union Street</span><br/>
                                Located in the center of Union Street it houses a special collection of books and records featuring stories of Bordentown. It is a branch of the Burlington County Library.
                                The building is the perfect example of the early 20th century Classic Revival style. Its symmetric facade, broken pediment over the entrance, gable-end chimneys, keystones in the window lentils and oversized classic details at the cornice all comprise the elements of the style. It is a well proportioned handsome building.
                                At the corner of Union Street and Farnsworth Avenue one is torn as to which direction he should head. Turning east towards Chestnut Street the explorer will find numerous gracious homes of varying vintage and style:
                            </p><p>
                                <span class="inum">500 Farnsworth-(c.1750) </span>"18 perches" is a typical side hall plan of the mid 1700's as influenced by Philadelphia architecture.
                            </p><p>
                                <span class="inum">502 Farnsworth-(c.1860) </span>a handsome Victorian Italianate townhouse with heavy detailing, molded front doors and elaborate cornice contrasts dramatically with its neighbor.
                            </p><p>
                                Continuing farther down the street you will see large homes reflecting the prosperity of the merchant and professional families of earlier years. This section of Farnsworth Avenue is residential, in contrast to the center portion of "Main Street" which is primarily commercial. You are encouraged to explore this end of town or proceed with the tour west towards the town center.
                            </p>
                        </div>
                        <div class="center"><img src="images/tour/tour-img4.gif" alt="" class="tour-img" /></div>

                    </div>
                </div>

                <div class="borderBox guided-tour">
                    <div class="listings">
                        <div class="columns colcount2"> 
                            <p>               
                                <span class="inum">8 | 432 Farnsworth Avenue</span><br/>
                                Built in the Federal period this handsome 18th century Philadelphia style brick dwelling features a central entrance with sunburst fanlight and glass side panels common in that period. Odd is its absence of window surrounds.
                            </p><p>
                                <span class="inum">9 | Presbyterian Manse, "The Julian House"</span><br/>
                                <span class="iaddy">433 Farnsworth Avenue</span><br/>
                                Site of one of the early private schools in Bordentown, The Adelphi Institute 1866-1878, run by Professor Julian (A.K.A. Black Strap Jack). The house was given to the church by Mahlon Hutchinson in 1893. Items of interest include the picket fence which is a copy of one in Williamsburg, Va. and roof over the side door taken from Washington s Headquarters at Valley Forge. The Julian House has a beautiful Greek Revival door surround with a square transom and sidelights. The facade is perfectly symmetric with its original paneled shutters and delicate paneled cornice.
                            </p><p>
                                <span class="inum">10 | 428 Farnsworth Avenue</span><br/>
                                This home is a heavy Italianate Villa style with bold window surrounds on the second floor and heavy cornice and door pediment. Unfortunately it's original clapboard siding was covered with stucco in later years. Do not miss the gorgeous iron fence and hitching post.
                            </p><p>
                                <span class="inum">11 | First Presbyterian Church of Bordentown</span><br/>
                                <span class="iaddy">Farnsworth Avenue</span><br/>
                                This church is a twin tower basilica with 5 bays. Dedicated on January 15,1869 it was the first building in town to house a pipe organ. A tall steeple once crowned the bell tower until 1914 when it was removed for safety.
                            </p><p><span class="inum">12 | 425 Farnsworth Avenue</span><br/>
                                Across from the Church is another example of the Italianate style house common in the last quarter of the 19th Century. It is highly formal with its symmetry, double bracketed cornice at the roofline and on the porch. Peek over the hedge into the side yard, the iron fountain was cast in 1830 in Philadelphia.
                                There is a collection of Second Empire style houses before you reach Burlington Street. This style is identified by the Mansard roof (a roof with two slopes on all four sides, which increase headroom in the attic space and provides an additional useable floor, to provide light on this floor. The mansard roof was almost always pierced with dormers.
                            </p><p>
                                <span class="inum">13 | Apps Hardware</span><br/>
                                Corner of Farnsworth Avenue and Burlington Street Step back in time to hardware stores of bygone days. Note the massive wood counter and the unusual antique tools on display. The storefront was recently restored to an earlier appearance.
                                As you travel east on Burlington Street you will note a rhythm in the street's design. Most buildings are two stories high, with similar masses, consistent setbacks from the street and steps up to entrance porches or doors. The majority of the homes have the Bordentown side hall plan we will see all over town.
                            </p><p>
                                <span class="inum">14 | Mt. Zion A.M.E. Church</span><br/>
                                <span class="iaddy">36 East Burlington Street</span><br/>
                                Organized in 1841 and after occupying many locations the congregation built this building in 1955. Like the larger churches in town, Mount Zion has a side tower and articulated stucco facade above the front stained glass window.
                            </p><p>
                                <span class="inum">15 | Granite Monument</span><br/>
                                <span class="iaddy">Corner of Hopkinson and East Burlington Streets</span><br/>
                                Commemorates William F. Powell eminent black educator and US Minister to Haiti from 1905 to 1907.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="borderBox guided-tour">
                    <p class="center"><em>                Back on Farnsworth Avenue<br/>
                            Take note of the revitalization project recently completed from Burlington Street to Park Street. Gaslights, planters, brick sidewalks and restored storefronts are part of the improvements. In addition many interesting shops and restaurants are open in the downtown area and welcome visitors.
                        </em></p><br/><br/>
                    <div class="listings">
                        <div class="columns colcount2"> 

                            <p>
                                <span class="inum">16 | Trinity United Methodist Church</span><br/>
                                <span class="iaddy">Farnsworth Avenue</span><br/>

                                A Romanesque stone basilica of the mid 19th century, the Church boasts beautiful and recently restored stained glass windows. Stone articulates the surface in the form of cornices around the windows, doors and under the gable. The bell tower is pushed back to the rear of the church unlike other church towers and spires in the town.
                            </p><p>
                                <span class="inum">17 | The First National State Bank</span><br/>
                                This bank, built in 1914. is of the Temple Front style. Common to banks since the early 19th century, the style evokes a sense of permanence and importance. The facade is derived from the temples of Greece and Rome; this large granite structure has enormous columns, an overpowering triangular pediment with swaged garlands and symmetric original facade.
                            </p><p>
                                <span class="inum">18 | Old Friends Meeting House</span><br/>
                                <span class="iaddy">302 Farnsworth Avenue</span><br/>
                                Bordentown's first house of worship built in 1740 by the town's original Quaker settlers on land deeded from Joseph Borden. The Quaker's desire for simplicity is strongly reflected here in the two story plain building with a single cornice and a simple post porch. Look closely at the brick markings reveal that at one time the second level was merely a knee wall and not a full story.
                            </p><p>
                                <span class="inum">19 | Bank of Mid Jersey</span><br/>
                                This imposing style is called the Vault. Generally buildings are two to three stories high with a facade penetrated by a tall and comparatively narrow center opening. The visual effect is one of massiveness and permanence.
                            </p>
                        </div>
                        <div class="center"><img src="images/tour/tour-img5.gif" alt="" class="tour-img" /></div>

                    </div>
                </div>

                <div class="borderBox guided-tour">
                    <div class="listings">
                        <div class="columns colcount2"> 
                            <p>
                                <span class="inum">20 | The Firehouse Gallery</span><br/>
                                <span class="iaddy">8 Walnut Street</span><br/>
                                Originally the home of the Citizens Hook and Ladder Company this unwanted building was converted into an art gallery and school on the first floor with the artist's residence above. This 1886 Victorian structure features an arched tri-part window and turned columns flanking the garage door.
                            </p><p>
                                <span class="inum">21 | Shippen House</span><br/>
                                <span class="iaddy">15 Walnut Street</span><br/>
                                This is the original home of the Philadelphia Shippen Family who lived in town after 1830. The Shippens were fond friends of the Bonapartes and brought with them the Philadelphia Federal style and 2'h story side hall floor plan. The house's elegant front portico and entranceway with fanlight and glazed sidelights are common features of the style. Note the early firesign and lovely iron work on the property. 
                            </p><p>
                                <span class="inum">22 | The Hilton House</span><br/>
                                <span class="iaddy">100 Walnut Street</span><br/>
                                The original part of this house was built about 1750 of bricks brought from England. William Hilton conducted a private school here. Another example of the 21/2 story side hall floor plan.
                            </p><p>
                                <span class="inum">23 | 224-220 Prince Street</span><br/>
                                Built in the 1850's of brick and clapboard, the fronts of these gracious homes are of unique architectural interest. The whole row looks as if it was transplanted from downtown Philadelphia. Note the Greek Revival style of the entry porches, the rectangular transoms and shallow pitched roof.
                            </p><p>
                                <span class="inum">24 | 218-214 Prince Street</span><br/>
                                This two story row of townhomes, c.1800, is of clapboard. Its original two left houses resembled 211-209. Note the central chimney stack. The far right house was a later addition as evidenced by the vertical break in the clapboard. Victorian detailing suggests a remodeling in the late 19th century.
                            </p><p>
                                <span class="inum">25 | 211o 9 Prince Street</span><br/>
                                These "tenant" houses c. 1800 originally contained one room on the first floor and one on the second. Over the years additional rooms have been added. 
                            </p><p>
                                <span class="inum">28 | The Frazer House</span><br/>
                                <span class="iaddy">201 Prince Street</span><br/>
                                Home of Thomas Frazer captain in the British Army operating against the Colonists. His daughter Caroline married Prince Lucien Murat in 1831. Murat was the nephew of Joseph Bonaparte and spent 20 years in Bordentown. This is a perfect example of the 2 '/2 story side hall plan with gabled roof end and simple raised entranceway that is common throughout Bordentown.
                            </p><p>
                                <span class="inum">27 | Old Burial Ground Christ Church Graveyard</span><br/>
                                <span class="iaddy">End of Church Street</span><br/>
                                On land donated by Joseph Borden in 1740 many early notables are buried here. Some of the graves date back to the Revolutionary War.
                            </p><p>
                                <span class="inum">28 | Christ Episcopal Church</span><br/>
                                <span class="iaddy">130 Prince Street </span><br/>
                                The Episcopal church is a romantic English country stone church complete with lychgate. Although strongly Gothic from its steep roofline, pointed entrance and rose window and pyramid spire, the decorative stone string courses, window surrounds and heavy slate roof weigh the structure back to earth. The present Church was dedicated in 1879 when this building was completed. 
                            </p><p>
                                <span class="inum">29 | First Baptist Church</span><br/>
                                <span class="iaddy">Prince Street</span><br/>
                                Built in 1893 this church is Romanesque Revival as evidenced by the masonry construction, brick arches, corbeling and some blind arcading. It is not as heavy as most structures of this style. All openings and the gable ends point toward heaven. The Baptists are the oldest congregation in Bordentown, this current building is the third church on this site.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="borderBox guided-tour">
                    <div class="listings">
                        <div class="columns colcount2"> 
                            <p>
                                <span class="inum">33 | Site of the Priscilla Braislin School</span><br/>
                                <span class="iaddy">10 Prince Street</span><br/>
                                Run by the Braislin Sisters this private school founded in 1889, was established for the "higher education of young ladies" developing "character as well as intellect". In 1901 it boasted enrollment of 30 students (both boarders and day school attendees) and a faculty
                                educated at Tuits, Vassar, and Smith. The original building was razed to make room for the present home.
                            </p><p>
                                <span class="inum">34 | 6 Prince Street</span><br/>
                                Built in 1814 for William McKnight this Georgian Federalist structure has enormous proportions and features. The ornately bracketed eaves, altered roofline, heavy doors and resurfaced exterior suggest later alterations. The house has nine fireplaces, seven of which are Italian marble. Some of its prior owners were William McKnight 1814-1849. Captain Peter Kostu 1849-1866, General Gershom Mott 1867-1884.
                            </p><p>
                                <span class="inum">35 | 5 and 9 Prince Street</span><br/>
                                Built by the Brakely Brothers in the mid 1880's each house has its own individuality while reflecting strong family resemblances. Number 9 is a Shingle Style Victorian with classic and reduced ornamentation and a shingled skin. The Queen Anne house Five, is more exotic with its varied house plan, decorative woodwork, elaborate porches and wide range of window and roof shapes.
                            </p><p>
                                <span class="inum">36 | The Swift Mansion</span><br/>
                                <span class="iaddy">2 Prince Street </span><br/>
                                Built around 1850 this late Victorian Italian Revival home has a commanding view of the Delaware River valley. George W. Swift, Jr., inventor, purchased the property in 1911 for °$1.00 and other valuable considerations of lawful money of the US of A'. He installed an elevator between the first and second floor. Possibly the only private elevator in the area. Originally the house was similar to 1 Prince Street but was given its Italianate look in the late 1800's. 
                            </p><p>
                                <span class="inum">37 | 1 Prince Street</span><br/>
                                This house designed by John Norman in a transitional Federal/Italianate style. Originally the house was 3 bays square with a central entrance. This was altered when a fourth bay was added as well as the exquisite ironwork porches to hide the lack of facade symmetry. Other buildings Notman designed include the Trenton State Prison, and The State Capital.
                                At the end of Prince at the top of the hill, look out over the river. Located here is a marker commemorating the Battle of the Kegs and pointing out the location of Revolutionary ship wrecks seen at logs tide.
                            </p><p>
                                <span class="inum">38 | 2 Farnsworth Avenue</span><br/>
                                Original site of "New Bellvue" built in the later part of the 18th Century by Colonel Josiah Kirkbride. Later the home of the Bordentown Female College which operated from 1860-1900 and enjoyed a fine reputation for educating genteel young ladies. The original structure was destroyed by fire. The gazebo is believed to be original. The present house is a lovely turn of the century Georgian Revival style with a symmetric facade and a palladian window over a classic entrance porch. The house has a impressive presence about it and is well suited to its surroundings.
                            </p><p>
                                <span class="inum">39 | 10 Farnsworth Avenue</span><br/>
                                This is an excellent example of high Victorian Italianate architecture It features massive heavily carved doors, a sweeping porch with an ornate roof line, heavy balustrade, elaborate window hoods and a cornice space with huge paired brackets incorporating the attic windows to add to its enormity. Victorian opulence at its best
                            </p>
                        </div>
                        <div class="center"><img src="images/tour/tour-img6.gif" alt="" class="tour-img" /></div>

                    </div>
                </div>

                <div class="borderBox guided-tour">
                    <div class="listings">
                        <div class="columns colcount2"> 
                            <p>
                                <span class="inum">40 | Thomas Burchanan Read House</span><br/>
                                <span class="iaddy">15 Farnsworth Avenue </span><br/>
                                One of the oldest homes in town built soon after 1750. It is rumored that General George Washington was entertained here. The house is named after one of its owners who wrote Sheridan's Ride. It is a classic Federal house with a Philadelphia 3 bay side hall plan. There are later alterations but the raised water table and the string course between the first and second levels are 18th century features.
                            </p><p>
                                <span class="inum">41 | 17 Farnsworth Avenue</span><br/>
                                Built in 1818. this beautiful brick building was once the home of General Thomas D. Landon. Headmaster of the Bordentown Military Institute. During World War II it was used as dormitory. Like its neighbor, various occupants added their own period's styles. This house has been greatly altered in the last quarter of the 19th century as evidenced by the strong Victorian details of mansard roof, bracketed cornices, side porch and decorative dormers.
                            </p><p>
                                <span class="inum">42 | 19 Farnsworth Avenue</span><br/>
                                This brick and clapboard house built by Joseph Hopkinson about 1820 in the Federal style was also extensively renovated around 1900. The bay window, dormers, side porch, and side entrance, all features of Colonial Revival architecture, were added at that time.
                            </p><p>
                                <span class="inum">43 | Stephen Sayre House</span><br/>
                                <span class="iaddy">25 Farnsworth Avenue</span><br/>
                                Home of Stephen Sayre former Lord Major of London, this building was moved from its original location in the Bonaparte Park to its present site. Sayre sold his estate to Joseph Bonaparte. The mansard roofline and distinctive arched dormer windows are notable. 
                            </p><p>
                                <span class="inum">44 | First Bank</span><br/>
                                This building, built in 1850 was originally the home of the Bordentown Banking Company (The Bank of Mid Jersey). It has since been converted to a residence, note the massive front doors and drop pendant cornice moldings. It is Italianate and has an appearance that conveys permanence.

                            </p><p>


                                <span class="inum">45 | Joseph Borden House</span><br/>
                                <span class="iaddy">32 Farnsworth Avenue</span><br/>
                                The present structure was built on the ruins of the original home of Colonel Joseph Borden. The first homestead was burned in June 1775 by the British as a retaliatory measure. The house features heavy Georgian details in the treatment of the doorway, window lintels and roof cornice. It is very symmetrical. The most notable feature on the property is the ironwork "wheat sheaves" fence, one of the finest examples in the State. The side porch has cast iron columns.
                                <br/>
                                At the corner of Farnsworth and Park turn left down Park Street and head left onto Second Street. Notice the old Firehouse at #36 Second. Another good example of sensitive adaptive reuse, it is now a private residence. At the corner of Thompson and Second there is an old store, an interesting building which is also a private residence. Before you turn down Thompson Street go to the end of Second and take a few moments to rest in the Hilltop park with its lovely view of the river.
                            </p>      
                        </div>
                        <div class="center"><img src="images/tour/tour-img7.gif" alt="" class="tour-img" /></div>
                    </div>
                </div>

                <div class="borderBox guided-tour">
                    <div class="listings">
                        <div class="columns colcount2"> 
                            <p>
                                <span class="inum">     46 | Thompson Street</span><br/>
                                <span class="iaddy">Behind Park Street between Second and Third Streets</span><br/>
                                This narrow street was believed to be created to accommodate the influx of working class in the early 1800's. This theory is supported by the small size and common age of the houses and the proximity to the riverfront. In the middle to late 1800's with the building of the canal and railroad Thompson Street became known as "Irish Town'". Saturday nights local magistrates would close down the street because of the rowdy parties. The street today is a pure sampling of 19th Century wood-frame architecture and boasts a very active and proud neighborhood.
                                At the corner of Thompson Street and Third turn right towards Park.
                            </p><p>
                                <span class="inum">47 | Site of the Bordentown</span><br/>
                                <span class="iaddy">Military Institute Old Main Park Street </span><br/>
                                Destroyed by fire in the early '80's."Old Main" was the center of campus life The Institute was recognized nationally as one of the finest military schools of its time. Suffering from the decline of military-based education the school merged in 1972 with the Lenox School located in New England and subsequently disbanded. The
                                Alumni Association is still active, holding periodic reunions in the
                                Bordentown area. Currently a developer is planning construction of
                                condominiums on the site. 
                                At the corner of Park and Third one must make another decision ... items 48 through 51 are located east on Park Street where there is no sidewalk. Also it is quite a walk and there is a steep hill coming back. If you choose not to tackle this part of the tour turn right on Park and pick up the tour at number 52 in the guide.
                            </p><p>
                                <span class="inum">48 | Original Gates of Point Breeze</span><br/>
                                <span class="iaddy">Park Street</span><br/>
                                Through the trees look carefully to see the main gates to the Bonaparte Estate. Early pictures show this as a grand avenue beautifully landscaped.
                            </p><p>
                                <span class="inum">49 | Bonaparte Park Garden House</span><br/>
                                <span class="iaddy">Park Street</span><br/>
                                The only original Bonaparte building still standing, this is now part of the Divine Word Mission. The house has peculiar proportions. Its symmetry, end chimneys, graduated window sizes, entrance and raised basement level suggest an 18th Century Georgian structure underneath. A beautiful iron gate entrance remains.
                            </p><p>
                                <span class="inum">50 | Divine Word Missionary</span><br/>
                                <span class="iaddy">Site of Joseph Bonaparte's Castle and Residence</span><br/>
                                Bonaparte's original mansion overlooked the Delaware at Point Breeze. It was destroyed by fire in 1820 and was rebuilt by Bonaparte. Subsequent owners tore down Bonaparte's second home replacing it with another grand building. That residence was also unfortunately destroyed by fire in 1982. A Bonaparte mantle is on display at the Burlington County Historical Society.
                            </p><p>
                                <span class="inum">51 | The Anderson Mansion</span><br/>
                                <span class="iaddy">100 Park Street</span><br/>
                                This mansion built in 1910 by George G. Anderson, Superintendent of the Bordentown Worsted Mills (now Ocean Spray) remained in the Anderson family until recently. The exterior bricks and materials for the living room fireplace were imported from England. Solid plaster walls and ceilings are stenciled and painted with frescos by artists from John Wanamakers in Philadelphia. Four tenths of an acre on the north side of the house has been dedicated to the City as a memorial to the Anderson family and to protect the mature trees there.
                            </p><p>
                                <span class="inum">52 | Joseph Hopkinson's House</span><br/>
                                <span class="iaddy">63 Park Street</span><br/>
                                Once owned by Joseph Hopkinson author of "Hail Columbia" and son of Francis Hopkinson. The home was also owned by Bonaparte's physician in 1820 and served as part of the Bordentown Military Institute campus.
                                At one time the house was whitewashed to hid the alterations of later years. Look closely now - because the bricks tell a story of the buildings changes from a smaller side hall house to its present day
                                appearance. Also worth noting are the decoratively laid Flemish bond bricks on the earliest sections of the house.
                            </p>      
                        </div>
                        <div class="center"><img src="images/tour/tour-img8.gif" alt="" class="tour-img" /></div>
                    </div>
                </div>

                <div class="borderBox guided-tour">
                    <div class="listings">
                        <div class="columns colcount2"> 

                            <p>
                                <span class="inum">53 | Park Street Hamlet</span><br/>
                                A recent addition to Bordentown these "new" townhouses compliment the architectural style of the surrounding buildings while providing its occupants with new construction features. They repeat the 2'/2 story side hall plan, classic detailing, dormers and entrance porches found all over town.
                            </p><p>
                                <span class="inum">54 | Linden Hall</span><br/>
                                <span class="iaddy">47-53 Park Street</span><br/>
                                Home of Prince Lucien Murat who with Madame Caroline Murat operated a world famous boarding school at this location. Now a row of separate private homes of many styles.
                            </p><p>
                                <span class="inum">55 | Francis Hopkinson House</span><br/>
                                <span class="iaddy">101 Farnsworth Avenue</span><br/>
                                Built in 1750, this house became the home of Francis Hopkinson and his bride Anne Borden in 1768. Signer of the Declaration of Independence, and author of the poem "The Battle of the Kegs", Francis Hopkinson was also the first student enrolled at the University of Pennsylvania. The house was spared burning by the British in 1778 because of a Hessian Officer's appreciation for Hopkinson's library. The building is on the National Register of Historic Places. Like many houses in town it has undergone numerous changes. The 18th century Hopkinson house was originally only two stories with a gable roof. Flemish bond brick, a pent roof and a patterned end wall were added in 1850. The construction date is visible on the side wall facing Park Street. The mansard roof on was added in 1902. The entrance however remains unaltered.

                            </p><p>
                                <span class="inum">56 | Patience Wright House</span><br/>
                                <span class="iaddy">100 Farnsworth Avenue </span><br/>
                                Home of the first woman sculptress. Patience Wright was also an American spy in London during the Revolution. This building through the years has been a private residence, a fashionable boarding house and a doctor's office. It's roof cornice and dormers are unaltered and maintain their elegant Federal details.
                            </p><p>

                                <span class="inum">57 | Masonic Hall</span><br/>
                                <span class="iaddy">119 Farnsworth Avenue </span><br/>
                                At one time this building was the first movie house in town, it later housed the Post Office. The Masons moved into the building in 1856.
                            </p><p>
                                <span class="inum">58 | Thomas Paine House</span><br/>
                                <span class="iaddy">2 West Church Street Corner of Farnsworth and Church</span><br/>
                                Although radically altered and sided this simple 3 bay 2 1/2 story side hall plan of this house is still risible on the second story attic levels of the Farnsworth Avenue facade. The downtown architecture here is varied. Styles range from Italianate to Queen Anne and Tudor Revival to 20th Century moderne. The downtown is alive with texture, details, color and visual diversity. Please feel free to stop along the route and browse in the shops and restaurants.
                            </p><p>
                                <span class="inum">59 | Horse Trough</span><br/>
                                <span class="iaddy">Center of Crosswicks Street at Farnsworth Avenue </span><br/>
                                Erected in 1914 by the Alumni of The Bordentown Female College (1851-1891), the trough has recently been placed on the small island to protect it against modern day transportation. 
                            </p>


                        </div>
                        <div class="center"><img src="images/tour/tour-img9.gif" alt="" class="tour-img" /></div>

                    </div>
                </div>

                <div class="borderBox guided-tour">
                    <div class="listings">

                        <div class="decorative huge center" style="margin-top:220px;">The End</div>
                        <p class="center">You have now completed the tour and are near <br/>the Visitors' Center where you began.<br/> 
                            Despite your tired feet, we hope you have enjoyed our City.</p>
                            <!--                                    <div class="center"><img src="images/tour/tour-img10.jpg" alt="" class="tour-img" /></div>-->

                    </div>
                </div>


            </div> <!-- end slideshow -->

        </div><!-- end extended -->



    </div><!-- .container -->
</div><!-- .wrapper -->

<script>
    $(function(){
        
       
//        $('.colcount2').columnize({
//            //columns:2,
//            width:300
//        });
           
 //    $('.columns').columns({paging:true});
 
 
//	$('.native').each(function(){
//            $(this).html($(this).prev('.colcount2').html());
//        });
//        
//
//        $('.colcount2').column({
//					width: 'auto',
//                                        count:2,
//                                        gap:20
//					
//				});
//        
        // settimeout so that the columns js has time to initialize 
        setTimeout( function() {  
     
       
     
        $('#slideshow').cycle({
            fx:      'scrollHorz',
            timeout:  0,
            prev:    '#prev',
            next:    '#next',
            pager:   '#nav',
            pagerAnchorBuilder: pagerFactory,
            animOut: {  
                opacity: 0  
            }
        });

    
        function pagerFactory(idx, slide) {
            var s = idx > 10 ? ' style="display:none"' : '';
            return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';
        };
   
        var navw = 0;
   
        var sh = $("#slideshow").height();
        var th = $(".guided-tour").height();
   
        $("#nav li").each(function(){
            navw += $(this).width(); 
        });
     
        //$("#nav").css({"width":navw, "top": th+140, "left":(950-navw)/2});
        $("#nav").css({"width":navw, "left":(950-navw)/2});
        
        var ts = $(".guided-tour");  
    
        ts.each(function(){
       
            $(this).append("<div class='paginate-tour center serif large' style='position:absolute; bottom:10px; right:450px;'><span>page \n\
                        <span class='pgNum'>"+$(this).index()+" </span>\n\
                        of <span class='pgTotal'>"+((ts.length) - 1) +"</span></span></div>");
            });
    
        ts.first().find(".paginate-tour").css({"display":"none"});
        ts.last().find(".paginate-tour").css({"display":"none"});
   
         }, 1000 );
   
        
    
     });
</script>


<?php

require_once("footer.php");
?>
