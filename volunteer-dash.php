<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <title>Volunteer Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="volunteer-dashboard.css">
</head>

<body>

    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-heart"></span>
                <span>DonateMate</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../homepage/index.html">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href='contribution.php'>
                        <span class="ti-package"></span>
                        <span>Make Contribution</span>
                    </a>
                </li>
                <li>
                    <a href="reward-page.html">
                        <span class="ti-gift"></span>
                        <span>My Rewards</span>
                    </a>
                </li>
                <li>
                    <a href="volunteer-profile.html">
                        <span class="ti-user"></span>
                        <span>My Account</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">
            </div>

            <div class="social-icon">
                <span class="ti-bell"></span>
                <div></div>
            </div>
        </header>

        <main>
            <h2 class="dash-title">Overview</h2>
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-package
                        "></span>
                        <div>
                            <h5> Total Contributions</h5>
                            <h4> 153 </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-truck"></span>
                        <div>
                            <h5> Pending</h5>
                            <h4> 15</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5>Successfully delivered</h5>
                            <h4> 138</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>
            </div>

            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Contributions in 2020</h3>
                        <div class="graph">
                        <svg></svg>
                        </div>
   
                    </div>
                    <div class="share">
                        <div class="share-card">
                            <div class="share-single">
                                <div>
                                    <div>
                                        <h5>Quotes for today</h5>
                                        <p >Be the best you can be, remember to ignore negativity!</p>
                                    </div>
                                    
                                    
                                </div>
                            </div> 
                        </div>
                              
                    </div>
                </div>
            </section>
        </main>
    </div>

</body>
<script src="https://d3js.org/d3.v5.js"></script>

<script>
    const margin = 80;
    const width = 800 - 2 * margin;
    const height = 400 - 2 * margin;
	
	  const d3Proxy = d3;
    const traversedPath = []
  
    const data = [
      {
        "xLabel": "Jan",
        "value" : 20,
       
      }, 
      {
        "xLabel": "Feb",
        "value" : 29,
       
      }, 
      {
        "xLabel": "Mac",
        "value" : 21,
       
      }, 
      {
        "xLabel": "Apr",
        "value" : 18,
        
      }, 
      {
        "xLabel": "May",
        "value" : 33,
        
      },
      {
        "xLabel": "Jun",
        "value" : 16,
       
      }, 
      {
        "xLabel": "July",
        "value" : 5,
       
      }, 
      {
        "xLabel": "Aug",
        "value" : 0,
       
      }, 
      {
        "xLabel": "Sept",
        "value" : 12,
       
      }, 
      {
        "xLabel": "Oct",
        "value" : 0,
       
      }, 
      {
        "xLabel": "Nov",
        "value" : 23,
       
      }, 
      {
        "xLabel": "Dec",
        "value" : 40,
       
      }, 
    ];

    const svg = d3.select('svg').attr("width", width + 2 * margin).attr("height", height + 2 * margin);

    const chart = svg.append('g')
      .attr('transform', `translate(${margin}, ${margin})`);

    const axisScale = (d3, data, height, width) => {

        chart.selectAll("g").remove()

        const yScale = d3.scaleLinear()
          .range([height, 0])
          .domain([0, 50]);

        chart.append('g')
          .call(d3.axisLeft(yScale));

        const xScale = d3.scaleBand()
          .range([0, width])
          .domain(data.map((item) => item.xLabel)) 
          .padding(0.2)

        chart.append('g')
          .attr('transform', `translate(0, ${height})`)
          .call(d3.axisBottom(xScale));

      return {xScale, yScale};
    }  

    const drawBar = (chart, data, height, xScale, yScale) => {
        chart.selectAll('rect').remove()

        chart.selectAll()
                .data(data)
                .enter()
                .append('rect')
                .attr('x', (item) => xScale(item.xLabel))
                .attr('y', (item) => yScale(item.value))
                .attr('height', (item) => height - yScale(item.value))
                .attr('width', xScale.bandwidth())
                .style('opacity', 0);
    }

    const addText = (svg, height, width, margin, chartText, xText) => {
      svg.select("#yLabel").remove(); 
      svg.select("#chartName").remove(); 
      svg.select("#xLabel").remove(); 

      svg.append('text')
        .attr("id","yLabel")
        .attr('x', -(height / 2) - margin)
        .attr('y', margin / 2.4)
        .attr('transform', 'rotate(-90)')
        .attr('text-anchor', 'middle')
        .text('sales in %')

      svg.append('text')
        .attr("id","chartName")
        .attr('x', width / 2 + margin)
        .attr('y', 40)
        .attr('text-anchor', 'middle')
        .text(chartText)

      svg.append('text')
        .attr("id","xLabel")
        .attr('x', width / 2 + margin)
        .attr('y', 590)
        .attr('text-anchor', 'middle')
        .text(xText)
    }

	const bindEvent = (d3Proxy, data) => {
      svgElement = d3.selectAll("rect");
      
      //Bar hover event
      svgElement
        .on("mouseenter", function (item, i) {
          if((item.months && item.months.length) || (item.weeks && item.weeks.length)){
            d3.select(this).style('opacity', 0.8)
          }
        })
        .on("mouseleave", function (item, i) {
            d3.select(this).style('opacity', 1)
        })
        
        //Bar click event
        svgElement.on("click", (item, i) => {
            if(item.months && item.months.length){
			  traversedPath.push(data);
			  main(d3Proxy, item.months, height, width, 'Month');

            } else if(item.weeks && item.weeks.length){
              traversedPath.push(data);
			  main(d3Proxy, item.weeks, height, width, 'Week');

            } 
        })
    
      //Button click event
      d3.select("#backButton").on("click", () => {
        if(traversedPath.length === 1){
          main(d3Proxy, traversedPath.pop(), height, width, 'Year');
        } else if(traversedPath.length === 2){
          main(d3Proxy, traversedPath.pop(), height, width, 'Month');
        }
      })
    } 
  
    const addAnimation = () => {
      svgElements = d3.selectAll("rect");
        svgElements.transition()
        .duration(500)
        .delay(function (item, i) { if (item) return 100 * (i); })
        .style('opacity', 1);
    }
  
    const addButton = (currentlyShowing) => {
      d3.select("#backButton").remove();
      if(currentlyShowing !== "Year"){
        d3.select("body")
          .append("input")
          .attr("type","button")
          .attr("id","backButton")
          .attr("class","button")
          .attr("value", "Back" )
          .style("font-size", "20px")
          .style("width", "100px")
      }
    } 
	
    const main = (d3Proxy, data, height, width, label) => {
	  //console.log("incoming data", data);
		
      const {xScale, yScale} = axisScale(d3Proxy, data, height, width);

      drawBar(chart, data, height, xScale, yScale); 

      
      
      addButton(label);

      bindEvent(d3Proxy, data); 
      
      addAnimation();
    }
    
    main(d3Proxy, data, height, width, 'Year'); 
  
  
</script>
</html>