window.onload = function(){
	$('#myCarousel').on('slide.bs.carousel', function () {
	  // do something…
	  
	})
	
	// functions at sub page
	
	if(document.querySelector(".progress-bar")){
		var	progressBarList = document.querySelectorAll(".progress-bar");
		
		function showProgressBar () {
			progressBarList.forEach( progressBar => {		
				if(progressBar.getBoundingClientRect().top < 800){
					progressBar.style.width = progressBar.getAttribute("aria-valuenow") + "%";

					let target = progressBar.getAttribute("aria-valuenow");
					let init = 0;
					
					setInterval(() => {
						if(target > init){
							init++;
							progressBar.parentElement.parentElement.children[0].children[1].textContent = init + '%';
						}
					},5);				
				}
			})

			if(progressBarList[progressBarList.length-1].style.width != '0%'){
				window.removeEventListener("scroll", showProgressBar);
				window.removeEventListener("load", showProgressBar);
			}
		}
		
		window.addEventListener("scroll", showProgressBar);
		showProgressBar();
	}
	
	if(document.querySelector(".accordions-wrapper")){		
		document.querySelectorAll(".accordions-wrapper").forEach(wrapper => {		
			wrapper.addEventListener("click", () => {
				let icon = wrapper.children[0].children[1].children[0].children[0].children[0];
				if(wrapper.children[1].classList.contains("show-content")){
					wrapper.children[1].classList.remove("show-content");
					wrapper.children[1].classList.add('hide-content');
					icon.classList.add("rotateIcon-plus");
					icon.classList.remove("rotateIcon-minus");
				} else {
					wrapper.children[1].classList.add('show-content');
					wrapper.children[1].classList.remove("hide-content");
					icon.classList.add("rotateIcon-minus");
					icon.classList.remove("rotateIcon-plus");
				}
			});
		});
	}
	
	if(document.querySelector("#loaders")){		
		let loaderDiv = document.querySelector("#loaders");
		window.addEventListener("scroll", activatePieChart);
		activatePieChart();
		
		function activatePieChart(){
			if(loaderDiv.getBoundingClientRect().top < window.innerHeight * .8) {
				document.querySelectorAll(".pie-title-center").forEach(div => {
					runPieChart('#' + div.getAttribute('id'));
				});
			}
		}
		
		function runPieChart(element){
			$(element).pieChart({
				barColor: '#ffb606',
				trackColor: '#eee',
				lineCap: 'round',
				lineWidth: 8,
				onStep: function (from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});
		}
	}
	
	if(document.querySelector("#milestones-wrapper")){
		window.addEventListener("scroll", milestonesFn);
		milestonesFn();
		function milestonesFn(){
			if(document.querySelector("#milestones-wrapper").getBoundingClientRect().top < window.innerHeight * .8){
				let milestonesIcons = document.querySelector("#milestones-wrapper").children;			
				Array.from(milestonesIcons).forEach(div => {
					let init = 0;
					let target = div.dataset.num * 1;
					setInterval(() => {
						if(target > init){
							init++;
							div.children[1].innerHTML = init;
						}
						document.querySelectorAll(".milestones-num").forEach(num => {
							if(num.parentElement.dataset.num == num.textContent){
								window.removeEventListener("scroll", milestonesFn);
							}
						})
					},5);
				})		
			}		
		}
	}
	
	// function for counting comment(s)
	if(document.querySelector(".news-comment-count")){
		document.querySelectorAll(".news-comment-count").forEach(comment => {
			comment.textContent > 1 ? comment.nextElementSibling.textContent = "comments" : comment.nextElementSibling.textContent = "comment"
		})
	}
	
	// getting the title to be used on the tab
	if(document.querySelector(".subpage-top")){
		document.querySelector("title").textContent = 'SiteName - ' + document.querySelector(".page-name").children[0].textContent;
	} else {
		document.querySelector("title").textContent = 'SiteName';
	}
}