<?php
if ($pages > 1) {
            $curr_page = ($start / $numPerPage) + 1;
        

        echo "<span>";
        if ($curr_page != 1) {
            echo "<a href='?s=" . ($start - $numPerPage) . "&p=" . $pages . "&page=" . ((($start + $numPerPage) / $numPerPage) - 1) . "' class='fltlft button'>prev</a>";
        }
        echo "&nbsp;</span>";
        echo "<span class='pageNums'>";
        for ($i = 1; $i <= $pages; $i++) {
            echo "<a href='?s=" . (($numPerPage * ($i - 1))) . "&p=" . $pages . "&page=" . (((($numPerPage * ($i - 1))) / $numPerPage) + 1) . "'>" . $i . "</a> ";
        }
        echo "</span>";
        echo "<span>";
        if ($curr_page != $pages) {
            echo "<a href='?s=" . ($start + $numPerPage) . "&p=" . $pages . "&page=" . ((($start + $numPerPage) / $numPerPage) + 1) . "' class='fltrt button'>next</a>";
        }
        echo "</span>";
}