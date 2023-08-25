<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Metronic Theme | Keenthemes</title>
	<meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
	<meta name="keywords" content="Craft, bootstrap, Angular 10, Vue, React, Laravel, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
	<link rel="canonical" href="Https://preview.keenthemes.com/start" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?php echo base_url() ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				<!--begin::Brand-->
				<div class="aside-logo flex-column-auto" id="kt_aside_logo">
					<!--begin::Logo-->
					<a href="index.html">
						<img alt="Logo" src="<?php echo base_url() ?>/assets/media/logos/logo-1.svg" class="h-15px logo" />
					</a>
					<!--end::Logo-->
					<!--begin::Aside toggler-->
					<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
						<!--begin::Svg Icon | path: icons/stockholm/Navigation/Angle-double-left.svg-->
						<span class="svg-icon svg-icon-1 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
									<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
								</g>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Aside toggler-->
				</div>
				<!--end::Brand-->
				<!--begin::Aside menu-->
				<div class="aside-menu flex-column-fluid">
					<!--begin::Aside Menu-->
					<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
						<!--begin::Menu-->
						<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
							<div class="menu-item">
								<a class="menu-link active" href="index.html">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/stockholm/Design/PenAndRuller.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
												<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Dashboard aa</span>
								</a>
							</div>
							<div class="menu-item">
								<div class="menu-content pt-8 pb-2">
									<span class="menu-section text-muted text-uppercase fs-8">Crafted</span>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/stockholm/Code/Compiling.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
												<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Pages</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<span class="menu-link">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Profile</span>
										</span>
									</div>
								</div>
							</div>
						</div>
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Aside menu-->
				<!--begin::Footer-->
				<div class="aside-footer flex-column-auto" id="kt_aside_footer"></div>
				<!--end::Footer-->
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" style="" class="header align-items-stretch">
					<!--begin::Container-->
					<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
						<!--begin::Page title-->
						<div class="d-flex align-items-center me-3">
							<!--begin::Title-->
							<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Dashboard
								<!--begin::Separator-->
								<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
								<!--end::Separator-->
								<!--begin::Description-->
								<small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small>
								<!--end::Description-->
							</h1>
							<!--end::Title-->
						</div>
						<!--end::Page title-->
						<!--begin::Actions-->
						<div class="d-flex align-items-center py-1">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
								<!--begin::Menu-->
								<div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
									<img src="<?php echo base_url() ?>/assets/media/avatars/150-2.jpg" alt="metronic" />
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="<?php echo base_url() ?>/assets/media/avatars/150-2.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bolder d-flex align-items-center fs-5">Max Smith
													<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
												</div>
												<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
								<!--end::Menu-->
							</div>

							<!--end::Button-->
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Post-->
					<div class="post d-flex flex-column-fluid" id="kt_post">
						<!--begin::Container-->
						<div id="kt_content_container" class="container">
							<h1>KENTUT</h1>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque placeat veritatis non iure similique, nemo accusantium nesciunt labore accusamus impedit tenetur sed possimus autem omnis eveniet, reprehenderit molestias provident quaerat?
							</p>
							<p>
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde distinctio necessitatibus numquam debitis iusto corporis quam laudantium eaque facilis tempore soluta minus inventore atque saepe, autem sit ex aspernatur rerum fugiat nesciunt, provident maxime architecto? Harum assumenda ducimus deleniti commodi quod recusandae, vero repellendus debitis, praesentium ipsa nam est? Illo esse odit quos amet. Reiciendis a pariatur, nihil impedit expedita ipsa laboriosam, libero, qui ad aliquam officiis repellat error obcaecati repudiandae itaque! Nihil voluptatem deleniti hic voluptate, amet ducimus nostrum magnam tempore consequuntur quas ad, suscipit aperiam consectetur itaque aliquid! Ab a tempore nostrum. Dicta, perspiciatis soluta mollitia unde incidunt expedita totam eveniet quia. Architecto consequatur saepe repudiandae veniam sapiente qui corrupti atque quaerat sed consectetur iusto dolore delectus porro fugit quos incidunt nam vel ipsum, error nisi. Eligendi quibusdam reprehenderit ipsam vel quos in provident dolor? Ducimus voluptate blanditiis odio accusantium nihil magni modi provident, dolorem aut repellendus facilis nobis quam rerum in quos laborum praesentium itaque saepe, pariatur et. Quisquam veritatis ipsa similique deleniti id aspernatur blanditiis. Atque nihil nam voluptate. Neque modi recusandae iste corrupti hic. A perspiciatis iusto ad quo nemo ut cum soluta ipsum nisi nam perferendis itaque quibusdam fugit repellat reiciendis tempora inventore assumenda tempore explicabo, et vero debitis quos sunt quod? Dignissimos tempora officia atque beatae inventore in doloremque a nemo porro architecto molestias, tenetur laudantium exercitationem officiis quas voluptates voluptatibus magni excepturi dolorem dolor natus odit adipisci aperiam facilis? Fuga rem nesciunt suscipit aliquam dicta sed quaerat quasi neque, labore debitis natus, expedita laborum facere dolor perferendis iusto ad autem quam odit, sapiente cum amet veniam. Asperiores, voluptas doloremque? Magnam perspiciatis nemo laborum repellat excepturi voluptas neque doloribus consequuntur dolore eum sequi, facere, eaque, aliquam nesciunt. Porro eos voluptatum tempore asperiores repellendus architecto, voluptas quam dolorum rem, nemo optio necessitatibus laborum minus iusto quibusdam fugit atque nam doloremque. Cum, ut velit. Neque accusamus ipsum excepturi obcaecati cumque totam quia velit odio, omnis, eveniet earum quae a? Esse officiis harum cumque accusamus neque repellendus, similique, minus reprehenderit, libero itaque nobis a rem sit nemo repudiandae non incidunt enim cupiditate quod atque? Eos unde dolorum, enim tempore corrupti distinctio expedita laudantium praesentium similique impedit. Doloribus tempore quam quasi asperiores a repellat, at corporis fuga tempora? Atque repellendus sit excepturi officiis quas eos voluptatum! Facilis tempore molestiae id, ad inventore ratione deleniti consequatur illo, iure reprehenderit natus est tenetur fuga veniam, autem beatae repellendus quia debitis earum quisquam libero perferendis. Non impedit veniam quaerat quo animi maiores placeat, dicta quae amet. Ipsa ab, dignissimos cumque quae in enim quia impedit consequuntur dolore! Mollitia, ab ipsam similique ad doloremque, velit sunt, totam asperiores eveniet architecto reiciendis id illum est voluptas eum quibusdam facilis enim consectetur! Perspiciatis vero consequuntur illum dolore id voluptates doloribus unde ipsam quidem. Modi eaque assumenda quo error excepturi? Qui voluptas assumenda ratione. Dolores aliquid quasi delectus soluta. Nulla voluptatibus ipsa deserunt! Quisquam pariatur id placeat quibusdam inventore nesciunt iure deserunt sint deleniti dolorem soluta doloremque quos tempore nemo asperiores explicabo totam, distinctio a accusantium ducimus tempora exercitationem. Neque nulla id adipisci provident quas ut cumque, iste minima perspiciatis laboriosam recusandae, eos saepe voluptate nisi quod. Mollitia quia repellendus, exercitationem tempore voluptatibus in commodi molestiae unde perspiciatis soluta labore reiciendis debitis quidem eaque non laborum odit nostrum ratione accusamus sint odio itaque necessitatibus! Vitae doloremque fugit modi sunt consequatur debitis nemo, amet, possimus cum minus et numquam libero, maiores autem reiciendis eos? Atque voluptatem corporis, voluptate vitae sunt ratione id esse natus perspiciatis sint itaque inventore quisquam fugiat nostrum sapiente dolorem accusamus sequi doloribus quia? Ipsa placeat quaerat nulla voluptates porro, sequi autem eum dolore sapiente ab maiores odit accusantium odio ratione dolorum quos officiis nostrum maxime minus culpa eius aspernatur numquam. Eum commodi voluptate soluta optio fuga laboriosam nulla adipisci, nam quo id veritatis sapiente ad error aut, velit numquam explicabo officia impedit dolor quia! Nemo, provident! Vel nulla neque quas optio dicta aliquid asperiores et excepturi autem corporis dolore aliquam, exercitationem voluptatum eum eos alias sed atque omnis eveniet eaque praesentium. Ducimus, aperiam! Tenetur sunt fugiat asperiores est quas quo ipsum deleniti distinctio repellat non odio itaque expedita, facilis incidunt, architecto officiis nihil! Nulla voluptatum vel tempora voluptas maiores ut odio eos aliquid. Aliquam, qui vero quis molestias odit numquam. Magni iure iusto facere vel, voluptate nihil eaque blanditiis dolores non aperiam, dolorum deserunt dignissimos optio, debitis illum laboriosam quis facilis. Ea harum itaque delectus perferendis aperiam, odio, at iste totam voluptatum molestias iusto et id sapiente vitae maxime natus eveniet, obcaecati ipsum? Quaerat vel dicta impedit repellendus fugit velit adipisci assumenda et in architecto debitis ut rem ea deleniti quidem sapiente, optio ducimus consequatur obcaecati repellat expedita iusto quod dolor quibusdam. A voluptatem provident quia delectus rem eos quam vitae totam dolore omnis ipsa aperiam dolorum maiores, vero, iure harum facilis commodi repudiandae natus fuga quod unde fugit? Deserunt dolor nobis officiis? Doloribus laudantium voluptatum exercitationem eos ipsum beatae rem aliquid. Alias quidem architecto nisi molestiae fuga reiciendis voluptatum quaerat fugiat, sunt tenetur. Iste vitae tempora omnis sequi doloremque repellendus cum quis accusamus? Accusamus in impedit quos beatae non cum, quaerat doloribus dolorum odit. Obcaecati quibusdam asperiores a deserunt veniam eaque commodi vel pariatur, illum praesentium quod voluptas ab magni omnis unde sit non, libero corporis placeat, tempora totam? Saepe illo corrupti quae consequatur porro iusto culpa minima id harum voluptates, ex, nemo sed quasi asperiores ipsa, obcaecati impedit alias? Corporis, assumenda error! Porro modi similique odio totam recusandae eaque vel exercitationem unde quo laudantium. Aut repellat quia tempora facere dicta vel consequuntur voluptas inventore? Animi tenetur fugiat laboriosam nostrum sapiente corrupti nisi eaque sit maxime sint repellat provident aspernatur ipsam blanditiis assumenda, tempora, voluptatem eius quod. Natus fugit quae enim, vitae iste consequatur maxime dolorem eum eaque labore quia sed quibusdam molestiae voluptas maiores suscipit necessitatibus accusamus aperiam impedit dolores provident dignissimos quod! Cum ipsam quam minima, modi aperiam eligendi saepe omnis aliquid sit? Dolor blanditiis in sed, sint, quo quibusdam, sunt distinctio unde accusamus magni maxime aut? Suscipit.
							</p>
						</div>
						<!--end::Container-->
					</div>
					<!--end::Post-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
					<!--begin::Container-->
					<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted fw-bold me-1">2021©</span>
							<a href="" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
						</div>
						<!--end::Copyright-->
						<!--begin::Menu-->
						<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
							<li class="menu-item">
								<a href="https://keenthemes.com/faqs" target="_blank" class="menu-link px-2">About</a>
							</li>
							<li class="menu-item">
								<a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
							</li>
							<li class="menu-item">
								<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
							</li>
						</ul>
						<!--end::Menu-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/stockholm/Navigation/Up-2.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
					<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--end::Main-->
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?php echo base_url() ?>/assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="<?php echo base_url() ?>/assets/js/custom/widgets.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/custom/modals/create-app.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/custom/modals/upgrade-plan.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>