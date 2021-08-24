<?php
set_time_limit(0);
date_default_timezone_set("Asia/Kolkata");
$city_list = array("1"=>array("Delhi","28.66","77.23"),
"2"=>array("Mumbai","18.9667","72.8333"),
"3"=>array("KolkÄta","22.5411","88.3378"),
"4"=>array("Bangalore","12.9699","77.598"),
"5"=>array("Chennai","13.0825","80.275"),
"6"=>array("HyderÄbÄd","17.3667","78.4667"),
"7"=>array("Pune","18.5196","73.8553"),
"8"=>array("AhmadÄbÄd","23.03","72.58"),
"9"=>array("SÅ«rat","21.17","72.83"),
"10"=>array("Lucknow","26.847","80.947"),
"11"=>array("Jaipur","26.9167","75.8667"),
"12"=>array("Cawnpore","26.4725","80.3311"),
"13"=>array("MirzÄpur","25.15","82.58"),
"14"=>array("NÄgpur","21.1539","79.0831"),
"15"=>array("GhÄziÄbÄd","28.6667","77.4167"),
"16"=>array("Indore","22.7206","75.8472"),
"17"=>array("Vadodara","22.3","73.2"),
"18"=>array("VishÄkhapatnam","17.7333","83.3167"),
"19"=>array("BhopÄl","23.25","77.4167"),
"20"=>array("Chinchvad","18.6278","73.8131"),
"21"=>array("Patna","25.61","85.1414"),
"22"=>array("LudhiÄna","30.9083","75.8486"),
"23"=>array("Ä€gra","27.18","78.02"),
"24"=>array("KalyÄn","19.2502","73.1602"),
"25"=>array("Madurai","9.9197","78.1194"),
"26"=>array("Jamshedpur","22.8","86.1833"),
"27"=>array("NÄsik","20","73.7833"),
"28"=>array("FarÄ«dÄbÄd","28.4333","77.3167"),
"29"=>array("AurangÄbÄd","19.88","75.32"),
"30"=>array("RÄjkot","22.2969","70.7984"),
"31"=>array("Meerut","28.99","77.7"),
"32"=>array("Jabalpur","23.1667","79.9333"),
"33"=>array("ThÄne","19.18","72.9633"),
"34"=>array("DhanbÄd","23.7928","86.435"),
"35"=>array("AllahÄbÄd","25.455","81.84"),
"36"=>array("VÄrÄnasi","25.3189","83.0128"),
"37"=>array("SrÄ«nagar","34.0911","74.8061"),
"38"=>array("Amritsar","31.6167","74.85"),
"39"=>array("AlÄ«garh","27.88","78.08"),
"40"=>array("Bhiwandi","19.3","73.0667"),
"41"=>array("Gwalior","26.215","78.1931"),
"42"=>array("Bhilai","21.2167","81.4333"),
"43"=>array("HÄora","22.59","88.31"),
"44"=>array("RÄnchi","23.3556","85.3347"),
"45"=>array("BezwÄda","16.5167","80.6167"),
"46"=>array("ChandÄ«garh","30.7353","76.7911"),
"47"=>array("Mysore","12.3086","76.6531"),
"48"=>array("Raipur","21.2379","81.6337"),
"49"=>array("Kota","25.18","75.83"),
"50"=>array("Bareilly","28.364","79.415"),
"51"=>array("Jodhpur","26.2918","73.0168"),
"52"=>array("Coimbatore","11","76.9667"),
"53"=>array("Dispur","26.15","91.77"),
"54"=>array("GuwÄhÄti","26.1667","91.7667"),
"55"=>array("SolÄpur","17.6833","75.9167"),
"56"=>array("Trichinopoly","10.8269","78.6928"),
"57"=>array("Hubli","15.36","75.125"),
"58"=>array("Jalandhar","31.3256","75.5792"),
"59"=>array("Bhubaneshwar","20.2644","85.8281"),
"60"=>array("Bhayandar","19.3","72.85"),
"61"=>array("MorÄdÄbÄd","28.8418","78.7568"),
"62"=>array("KolhÄpur","16.7","74.2333"),
"63"=>array("Thiruvananthapuram","8.5","76.8997"),
"64"=>array("SahÄranpur","29.964","77.546"),
"65"=>array("Warangal","17.9756","79.6011"),
"66"=>array("Salem","11.65","78.1667"),
"67"=>array("MÄlegaon","20.55","74.55"),
"68"=>array("Kochi","9.9667","76.2833"),
"69"=>array("Gorakhpur","26.7611","83.3667"),
"70"=>array("Shimoga","13.9304","75.56"),
"71"=>array("TiruppÅ«r","11.1075","77.3398"),
"72"=>array("GuntÅ«r","16.3","80.45"),
"73"=>array("Raurkela","22.2492","84.8828"),
"74"=>array("Mangalore","12.8703","74.8806"),
"75"=>array("NÄnded","19.15","77.3333"),
"76"=>array("Cuttack","20.45","85.8667"),
"77"=>array("ChÄnda","19.95","79.3"),
"78"=>array("Dehra DÅ«n","30.318","78.029"),
"79"=>array("DurgÄpur","23.55","87.32"),
"80"=>array("Ä€sansol","23.6833","86.9667"),
"81"=>array("BhÄvnagar","21.765","72.1369"),
"82"=>array("AmrÄvati","20.9333","77.75"),
"83"=>array("Nellore","14.4333","79.9667"),
"84"=>array("Ajmer","26.468","74.639"),
"85"=>array("Tinnevelly","8.7289","77.7081"),
"86"=>array("BÄ«kaner","28.0181","73.3169"),
"87"=>array("Agartala","23.8333","91.2667"),
"88"=>array("Ujjain","23.1828","75.7772"),
"89"=>array("JhÄnsi","25.4486","78.5696"),
"90"=>array("UlhÄsnagar","19.2167","73.15"),
"91"=>array("Davangere","14.4667","75.9167"),
"92"=>array("Jammu","32.7333","74.85"),
"93"=>array("Belgaum","15.8667","74.5"),
"94"=>array("Gulbarga","17.3333","76.8333"),
"95"=>array("JÄmnagar","22.47","70.07"),
"96"=>array("DhÅ«lia","20.9","74.7833"),
"97"=>array("Gaya","24.75","85.0167"),
"98"=>array("Jalgaon","21.0167","75.5667"),
"99"=>array("Kurnool","15.8222","78.035"),
"100"=>array("Udaipur","24.5833","73.6833"),
"101"=>array("Bellary","15.15","76.915"),
"102"=>array("SÄngli","16.8667","74.5667"),
"103"=>array("Tuticorin","8.7833","78.1333"),
"104"=>array("Calicut","11.25","75.7667"),
"105"=>array("Akola","20.7333","77"),
"106"=>array("BhÄgalpur","25.25","87.0167"),
"107"=>array("SÄ«kar","27.6119","75.1397"),
"108"=>array("TumkÅ«r","13.33","77.1"),
"109"=>array("Quilon","8.8853","76.5864"),
"110"=>array("Muzaffarnagar","29.4708","77.7033"),
"111"=>array("BhÄ«lwÄra","25.35","74.6333"),
"112"=>array("NizÄmÄbÄd","18.6704","78.1"),
"113"=>array("BhÄtpÄra","22.8667","88.4167"),
"114"=>array("KÄkinÄda","16.9333","82.2167"),
"115"=>array("Parbhani","19.2704","76.76"),
"116"=>array("PÄnihÄti","22.69","88.37"),
"117"=>array("LÄtÅ«r","18.4004","76.57"),
"118"=>array("Rohtak","28.9","76.5667"),
"119"=>array("RÄjapÄlaiyam","9.4204","77.58"),
"120"=>array("Ahmadnagar","19.0833","74.7333"),
"121"=>array("Cuddapah","14.4667","78.8167"),
"122"=>array("RÄjahmundry","16.9833","81.7833"),
"123"=>array("Alwar","27.5667","76.6167"),
"124"=>array("Muzaffarpur","26.12","85.3833"),
"125"=>array("BilÄspur","22.15","82.0167"),
"126"=>array("Mathura","27.4833","77.6833"),
"127"=>array("KÄmÄrhÄti","22.67","88.37"),
"128"=>array("PatiÄla","30.3204","76.385"),
"129"=>array("Saugor","23.8504","78.75"),
"130"=>array("BijÄpur","16.8244","75.7154"),
"131"=>array("Brahmapur","19.32","84.8"),
"132"=>array("ShÄhjÄnpur","27.8804","79.905"),
"133"=>array("TrichÅ«r","10.52","76.21"),
"134"=>array("BarddhamÄn","23.25","87.85"),
"135"=>array("Kulti","23.73","86.85"),
"136"=>array("Sambalpur","21.4704","83.9701"),
"137"=>array("Purnea","25.78","87.47"),
"138"=>array("Hisar","29.1489","75.7367"),
"139"=>array("FÄ«rozÄbÄd","27.15","78.3949"),
"140"=>array("BÄ«dar","17.9229","77.5175"),
"141"=>array("RÄmpur","28.8154","79.025"),
"142"=>array("Shiliguri","26.72","88.42"),
"143"=>array("BÄli","22.65","88.34"),
"144"=>array("PÄnÄ«pat","29.4004","76.97"),
"145"=>array("KarÄ«mnagar","18.4333","79.15"),
"146"=>array("Bhuj","23.2504","69.81"),
"147"=>array("Ichalkaranji","16.7","74.47"),
"148"=>array("Tirupati","13.65","79.42"),
"149"=>array("Hospet","15.2667","76.4"),
"150"=>array("Ä€Ä«zawl","23.7104","92.72"),
"151"=>array("Sannai","24.16","80.83"),
"152"=>array("BÄrÄsat","22.2333","88.45"),
"153"=>array("RatlÄm","23.3167","75.0667"),
"154"=>array("HandwÄra","34.4","74.28"),
"155"=>array("Drug","21.19","81.28"),
"156"=>array("ImphÄl","24.82","93.95"),
"157"=>array("Anantapur","14.6833","77.6"),
"158"=>array("EtÄwah","26.7855","79.015"),
"159"=>array("RÄichÅ«r","16.2104","77.355"),
"160"=>array("Ongole","15.5","80.05"),
"161"=>array("Bharatpur","27.2172","77.49"),
"162"=>array("Begusarai","25.42","86.13"),
"163"=>array("SonÄ«pat","28.9958","77.0114"),
"164"=>array("RÄmgundam","18.8","79.45"),
"165"=>array("HÄpur","28.7437","77.7628"),
"166"=>array("Uluberiya","22.47","88.11"),
"167"=>array("Porbandar","21.6425","69.6047"),
"168"=>array("PÄli","25.7725","73.3233"),
"169"=>array("Vizianagaram","18.1167","83.4167"),
"170"=>array("Puducherry","11.93","79.83"),
"171"=>array("KarnÄl","29.6804","76.97"),
"172"=>array("NÄgercoil","8.17","77.43"),
"173"=>array("Tanjore","10.8","79.15"),
"174"=>array("Sambhal","28.58","78.55"),
"175"=>array("Shimla","31.1033","77.1722"),
"176"=>array("GhÄndÄ«nagar","23.22","72.68"),
"177"=>array("Shillong","25.5744","91.8789"),
"178"=>array("New Delhi","28.7","77.2"),
"179"=>array("Port Blair","11.6667","92.75"),
"180"=>array("Gangtok","27.33","88.62"),
"181"=>array("KohÄ«ma","25.6667","94.1194"),
"182"=>array("ItÄnagar","27.1","93.62"),
"183"=>array("Panaji","15.48","73.83"),
"184"=>array("DamÄn","20.417","72.85"),
"185"=>array("Kavaratti","10.5626","72.6369"),
"186"=>array("Panchkula","30.6915","76.8537"),
"187"=>array("KagaznÄgÄr","19.3316","79.4661"));

?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>City and Sun Raise List - India</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <script
    type="text/javascript"
    src="//code.jquery.com/jquery-compat-git.js"
    
  ></script>


      <script type="text/javascript" src="https://rawgithub.com/padolsey/jQuery-Plugins/master/sortElements/jquery.sortElements.js"></script>

  <style id="compiled-css" type="text/css">
      td, th { border: 1px solid #111; padding: 6px; }
th { 
    font-weight: 700;
    cursor: pointer;
}


/* sortElements.js source */
/**
 * jQuery.fn.sortElements
 * --------------
 * @author James Padolsey (http://james.padolsey.com)
 * @version 0.11
 * @updated 18-MAR-2010
 * --------------
 * @param Function comparator:
 *   Exactly the same behaviour as [1,2,3].sort(comparator)
 *   
 * @param Function getSortable
 *   A function that should return the element that is
 *   to be sorted. The comparator will run on the
 *   current collection, but you may want the actual
 *   resulting sort to occur on a parent or another
 *   associated element.
 *   
 *   E.g. $('td').sortElements(comparator, function(){
 *      return this.parentNode; 
 *   })
 *   
 *   The <td>'s parent (<tr>) will be sorted instead
 *   of the <td> itself.
 */
/*jQuery.fn.sortElements = (function(){
    
    var sort = [].sort;
    
    return function(comparator, getSortable) {
        
        getSortable = getSortable || function(){return this;};
        
        var placements = this.map(function(){
            
            var sortElement = getSortable.call(this),
                parentNode = sortElement.parentNode,
                
                // Since the element itself will change position, we have
                // to have some way of storing it's original position in
                // the DOM. The easiest way is to have a 'flag' node:
                nextSibling = parentNode.insertBefore(
                    document.createTextNode(''),
                    sortElement.nextSibling
                );
            
            return function() {
                
                if (parentNode === this) {
                    throw new Error(
                        "You can't sort elements if any one is a descendant of another."
                    );
                }
                
                // Insert before flag:
                parentNode.insertBefore(this, nextSibling);
                // Remove flag:
                parentNode.removeChild(nextSibling);
                
            };
            
        });
       
        return sort.call(this, comparator).each(function(i){
            placements[i].call(getSortable.call(this));
        });
        
    };
    
})();*/

    /* EOS */
  </style>

  <script id="insert"></script>


    <script>
      const customConsole = (w) => {
        const pushToConsole = (payload, type) => {
          w.parent.postMessage({
            console: {
              payload: stringify(payload),
              type:    type
            }
          }, "*")
        }

        w.onerror = (message, url, line, column) => {
          // the line needs to correspond with the editor panel
          // unfortunately this number needs to be altered every time this view is changed
          line = line - 70
          if (line < 0){
            pushToConsole(message, "error")
          } else {
            pushToConsole(`[${line}:${column}] ${message}`, "error")
          }
        }

        let console = (function(systemConsole){
          return {
            log: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "log")
              systemConsole.log.apply(this, args)
            },
            info: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "info")
              systemConsole.info.apply(this, args)
            },
            warn: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "warn")
              systemConsole.warn.apply(this, args)
            },
            error: function(){
              let args = Array.from(arguments)
              pushToConsole(args, "error")
              systemConsole.error.apply(this, args)
            },
            system: function(arg){
              pushToConsole(arg, "system")
            },
            clear: function(){
              systemConsole.clear.apply(this, {})
            },
            time: function(){
              let args = Array.from(arguments)
              systemConsole.time.apply(this, args)
            },
            assert: function(assertion, label){
              if (!assertion){
                pushToConsole(label, "log")
              }

              let args = Array.from(arguments)
              systemConsole.assert.apply(this, args)
            }
          }
        }(window.console))

        window.console = { ...window.console, ...console }

        console.system("Running fiddle")
      }

      if (window.parent){
        customConsole(window)
      }
    </script>
</head>
<body>
   
    <table>
    <tr>
        <th class="sortable">City</th>
        <th class="sortable" >Lat</th>
        <th class="sortable">Lon</th>
        <th class="sortable">Sunraise Time</th>
    </tr>

<?php
for ($x = 1; $x <= 187; $x++) {

echo     "<tr><td>".$city_list[$x][0]."</td><td>".$city_list[$x][1]."</td><td>".$city_list[$x][2]."</td><td>";
echo date('H:i:s', date_sunrise(time(),SUNFUNCS_RET_TIMESTAMP,$city_list[$x][1], $city_list[$x][2]));
echo '</td></tr>';
}

?>



</table> 
    <script type="text/javascript">//<![CDATA[


var table = $('table');
    
 //   $('#facility_header, #city_header, #phone, #spec')
$('.sortable')
        .wrapInner('<span title="sort this column"/>')
        .each(function(){
            
            var th = $(this),
                thIndex = th.index(),
                inverse = false;
            
            th.click(function(){
                
                table.find('td').filter(function(){
                    
                    return $(this).index() === thIndex;
                    
                }).sortElements(function(a, b){
                    
                    return $.text([a]) > $.text([b]) ?
                        inverse ? -1 : 1
                        : inverse ? 1 : -1;
                    
                }, function(){
                    
                    // parentNode is the element we want to move
                    return this.parentNode; 
                    
                });
                inverse = !inverse;    
            });    
        });



  //]]></script>



</body>
</html>
