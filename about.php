<?php require('logic/validate.php'); ?>
<!DOCTYPE html>
<html>
<?php require('clones/head.php'); ?>
<body>
<?php require('clones/header.php'); ?>
    <main>
        <h1>about me</h1>
        <div class="separator"></div>
        <h2>bachelor of computer science and mathematics</h2>
        <img class="uni-image" src="https://eu-assets.simpleview-europe.com/manchester2016/imageresizer/?image=%2Fdmsimgs%2Fthe-university-of-manchester-min_1219152588.jpg&action=ProductDetailFullWidth2">
        <h2>the university of manchester</h2>
        <p>awarded first class in year 1. chaired BSc. team project - implemented and pitched full-stack website and database solution. <a href="javascript:" id="open-modal">see more info.</a></p>
        <!-- The Modal -->
            <div id="modal" class="modal">
                <!-- Modal content -->
                    <div class="modal-content">
                        <span id="close-modal" class="close">&times;</span>
                        <p>Second-year student at The University of Manchester studying Computer Science and Mathematics.
An analytical and critical thinker looking for relevant work placements. Devleloped passive application with revenue of c.
£3000. Background in solving complex problems with a passion for learning new methods and systems. Achieved in the top 1%
of mathematicians in the school year and attained 100% marking on both Mathematics and Further Mathematics mock A Level
seasons</p>
                        </div>
            </div>
            <script>
                document.getElementById('open-modal').onclick = function() {document.getElementById('modal').style.display = 'block';}
                document.getElementById('close-modal').onclick = function() {document.getElementById('modal').style.display = 'none';}
                window.onclick = function(event) {if (event.target == modal) modal.style.display = "none";}
            </script>
        <!-- End of Modal -->
        <div class="separator"></div>
        <h3>please see <a href="projects.php">projects page</a> for latest developments.</h3>
        <div class="separator"></div>
        <table>
            <tr><th>Language Comprehension</th></tr>
            <tr><td>Python</td><td>★★★★☆</td></tr>
            <tr><td>HTML/CSS</td><td>★★★☆☆</td></tr>
            <tr><td>JavaScript</td><td>★★★☆☆</td></tr>
            <tr><td>PHP</td><td>★★★☆☆</td></tr>
            <tr><td>MySQL</td><td>★★☆☆☆</td></tr>
            <tr><td>Java</td><td>★★★☆☆</td></tr>
        </table>
        <br>
        <table>
            <tr><th>Education</th></tr>
            <tr><td>(A2) Mathematics</td><td>A★</td></tr>
            <tr><td>(A2) Further Mathematics</td><td>A★</td></tr>
            <tr><td>(A2) Physics</td><td>A★</td></tr>
            <tr><td>GCSEs</td><td>999999988</td></tr>
        </table>
        <br>
        <table>
            <tr><th>UKMT Maths Challenge</th></tr>
            <tr><td>2015</td><td>🥉</td></tr>
            <tr><td>2016</td><td>🥈</td></tr>
            <tr><td>2017</td><td>🥈</td></tr>
            <tr><td>2018</td><td>🥇</td></tr>
            <tr><td>2019</td><td>🥇</td></tr>
            <tr><td>2020</td><td>🥇</td></tr>
            <tr><td>2021</td><td>🥇</td></tr>
            <tr><td>2022</td><td>🥇</td></tr>
        </table>
        <br>
        <table>
            <tr><th>Experience</th></tr>
            <tr><td>McDonald's</td><td>Team Member</td><td>2020 2021</td></tr>
            <tr><td>The University of Manchester</td><td>SoE Undergraduate</td><td>2022 2023-</td></tr>
            <tr><td>Agena Group Ltd.</td><td>Junior Software Developer</td><td>2023-</td></tr>
        </table>
        <br>
        <table>
            <tr><th>Skills</th></tr>
            <tr><td>Programming</td><td>★★★★☆</td></tr>
            <tr><td>Web Design</td><td>★★★★☆</td></tr>
            <tr><td>Computer Hardware</td><td>★★★★★</td></tr>
            <tr><td>Video Production</td><td>★★★☆☆</td></tr>
            <tr><td>Problem Solving</td><td>★★★★★</td></tr>
            <tr><td>Communication</td><td>★★★★☆</td></tr>
        </table>
    </main>
<?php require('clones/footer.php'); ?>
</body>
</html>