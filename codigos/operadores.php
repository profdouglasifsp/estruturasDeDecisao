<?php
echo "7<=7" . (7<=7 ? " (V)\n" : " (F)\n");
echo "13>20" . (13>20 ? " (V)\n" : " (F)\n");
echo "14<14" . (14<14 ? " (V)\n" : " (F)\n");
echo "7<=10 && 7>6" . (7<=10 && 7>6 ? " (V)\n" : " (F)\n");
echo "3>4 && 3<=6" . (3>4 && 3<=6 ? " (V)\n" : " (F)\n");
echo "“sim”==”sim” || ”sim”<>”sim”" . ("sim"=="sim" || "sim"<>"sim" ? " (V)\n" : " (F)\n");
echo "“sim”==”sim” && !”sim”<>”sim”" . ("sim"=="sim" && !"sim"<>"sim" ? " (V)\n" : " (F)\n"); 