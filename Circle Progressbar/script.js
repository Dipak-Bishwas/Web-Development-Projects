const halfCircles = document.querySelectorAll('.half-circle')
const halfCirclesTop = document.querySelector('.half-circle-top')
const progressBarCircle = document.querySelector('.progressbar-circle')

document.addEventListener('scroll',() => {
    const pageViewportHeight = window.innerHeight
    const pageHeight = document.documentElement.scrollHeight
    const scrolledPortion = window.pageYOffset

    const scrolledPortionDegree = (scrolledPortion/(pageHeight-pageViewportHeight))*360

    const scrolledPortionPercent = Math.floor(scrolledPortionDegree / 360*100)

    progressBarCircle.textContent = `${scrolledPortionPercent}%`

    halfCircles.forEach(el=> {
        el.style.transform = `rotate(${scrolledPortionDegree}deg)`

        if(scrolledPortionDegree >= 180){
            halfCircles[0].style.transform = 'rotate(180deg)'
            halfCirclesTop.style.opacity = `0`
        }else {
            halfCirclesTop.style.opacity = `1`
        }
    })
})