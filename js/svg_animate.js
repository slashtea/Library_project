$("#rect")
    .delay(500)
	  .velocity({ x: "+=200", y: "25%" })
    .velocity({ fillGreen: 255, strokeWidth: 2 })
	  .velocity({ height: 50, width: 50 })
    .velocity({ rotateZ: 90, scaleX: 0.5 })
    .velocity("reverse", { delay: 250 });