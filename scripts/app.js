$('.vertical-nav').hover(
	() => {
		$('.nav-container').css('width', '13rem')
		$('.page-content').css('width', 'calc(100% - 13rem)')
		$('.page-content').css('margin-left', '13rem')
		$('.logout').css('background-color', '#f2b705')
		$('.logout a i').css('color', '#000')
		$('.profile-image').css('padding', '0 3em')

		setTimeout(() => {
			$('.link-text').fadeIn('fast', () => {
				$('.link-text').css('display', 'inline')
			})
			$('.fa-sign-out-alt').addClass('me-2')
			$('.nav-link i').addClass('me-3')
			$('.user-name').css('display', 'inline')
		}, 100)
	},
	() => {
		$('.nav-container').css('width', '5rem')
		$('.page-content').css('width', 'calc(100% - 5rem)')
		$('.page-content').css('margin-left', '5rem')
		$('.link-text').css('display', 'none')
		$('.fa-sign-out-alt').removeClass('me-2')
		$('.nav-link i').removeClass('me-3')
		$('.logout').css('background-color', 'transparent')
		$('.logout i').css('color', '#fff')
		$('.user-name').css('display', 'none')
		$('.profile-image').css('padding', '0 0.5em')
	}
)
