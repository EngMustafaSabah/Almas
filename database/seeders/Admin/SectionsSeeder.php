<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert the data into the 'sections' table
        DB::table('sections')->insert(array_merge(
            // home
            $this->homeSections(),
            $this->globalSections(),
            $this->aboutSections(),
            $this->contactSections(),
        ));
    }

    private function homeSections(): array
    {
        return array_merge(
            // home
            $this->firstSection(),
            $this->aboutSection(),
            $this->customerJourneySection(),
            $this->statisticsSection(),
        );
    }

    private function globalSections(): array
    {
        return array_merge(
            // global
            $this->logoHeaderSection(),
            $this->logoFooterSection(),
            $this->newslatter(),
            $this->copyright(),
        );
    }

    private function aboutSections(): array
    {
        return array_merge(
            // global   
            $this->generalManagerSection(),
            $this->cooSection(),
        );
    }

    private function contactSections(): array
    {
        return array_merge(
            // global
            $this->getInContact(),
            $this->callThisNow(),
            $this->yourMessage(),
            $this->yourLocation(),
            $this->yourLocationMap()
        );
    }

    private function firstSection(): array
    {
        return [
            [
                'name' => 'one',
                'title' => json_encode(
                    [
                        'en' => 'Your Packing Solution here',
                        'ar' => 'Your Packing Solution here',
                    ]
                ),
                'second_title' => json_encode(
                    [
                        'en' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                        'ar' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                    ]
                ),
                'section_content' => json_encode(
                    [
                        'en' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has ..',
                        'ar' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has ..'
                    ]
                ),
                'page_id' => 1,
                'section_order' => 0,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ]
        ];
    }

    private function aboutSection(): array
    {
        return [
            [
                'name' => 'two',
                'title' => json_encode(
                    [
                        'en' => 'About Almas Arabic Pack.',
                        'ar' => 'About Almas Arabic Pack.',
                    ]
                ),
                'second_title' => json_encode(
                    []
                ),
                'section_content' => json_encode(
                    [
                        'en' => 'Arabian Diamond Company in Riyadh for packaging solutions It can be arranged in order To packaging and custom solutions according to customer demand as you want to add nationality to its customers and revive their ideas with the best quality at prices',
                        'ar' => 'Arabian Diamond Company in Riyadh for packaging solutions It can be arranged in order To packaging and custom solutions according to customer demand as you want to add nationality to its customers and revive their ideas with the best quality at prices',
                    ]
                ),
                'page_id' => 1,
                'section_order' => 1,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => 'mission',
                'title' => json_encode(
                    [
                        'en' => 'About Mission',
                        'ar' => 'About Mission',
                    ]
                ),
                'second_title' => json_encode(
                    []
                ),
                'section_content' => json_encode(
                    [
                        'en' => 'Active participation in improvement Marketing appearance to customers from By providing innovative packaging solutions Amazing and active participation in Kingdom\'s vision 2030 through local production',
                        'ar' => 'Active participation in improvement Marketing appearance to customers from By providing innovative packaging solutions Amazing and active participation in Kingdom\'s vision 2030 through local production',
                    ]
                ),
                'page_id' => 1,
                'section_order' => 0,
                'parent_id' => 2,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => 'vission',
                'title' => json_encode(
                    [
                        'en' => 'About Vission',
                        'ar' => 'About Vission',
                    ]
                ),
                'second_title' => json_encode(
                    []
                ),
                'section_content' => json_encode(
                    [
                        'en' => 'Creativity in providing packaging solutions Printing and appearance improvement catalog to customers',
                        'ar' => 'Creativity in providing packaging solutions Printing and appearance improvement catalog to customers',
                    ]
                ),
                'page_id' => 1,
                'section_order' => 1,
                'parent_id' => 2,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => 'goal',
                'title' => json_encode(
                    [
                        'en' => 'About Goal',
                        'ar' => 'About Goal',
                    ]
                ),
                'second_title' => json_encode(
                    []
                ),
                'section_content' => json_encode(
                    [
                        'en' => 'Commitment (denial, implementation, delivery) Creativity (we design, produce and produce) Modernity (we innovate, improve and develop) Quality (accuracy, appearance and quality)',
                        'ar' => 'Commitment (denial, implementation, delivery) Creativity (we design, produce and produce) Modernity (we innovate, improve and develop) Quality (accuracy, appearance and quality)',
                    ]
                ),
                'page_id' => 1,
                'section_order' => 2,
                'parent_id' => 2,
                'status' => true,
                'url' => "",
            ]
        ];
    }

    private function customerJourneySection(): array
    {
        return [
            [
                'name' => 'customer-journey',
                'title' => json_encode(
                    [
                        'en' => 'Customer Journey',
                        'ar' => 'Customer Journey',
                    ]
                ),
                'second_title' => json_encode(
                    []
                ),
                'section_content' => json_encode(
                    []
                ),
                'page_id' => 1,
                'section_order' => 2,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],

            [
                'name' => '1-customer-visit',
                'title' => json_encode(
                    [
                        'en' => '1- Customer visit',
                        'ar' => '1- Customer visit',
                    ]
                ),
                'second_title' => json_encode(
                    []
                ),
                'section_content' => json_encode(
                    []
                ),
                'page_id' => 1,
                'section_order' => 0,
                'parent_id' => 6,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => '2-product-pricing',
                'title' => json_encode(
                    [
                        'en' => '2- product pricing',
                        'ar' => '2- product pricing',
                    ]
                ),
                'second_title' => json_encode(
                    []
                ),
                'section_content' => json_encode(
                    []
                ),
                'page_id' => 1,
                'section_order' => 1,
                'parent_id' => 6,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => '3-client-follow-up',
                'title' => json_encode(
                    [
                        'en' => '3- Client follow-up',
                        'ar' => '3- Client follow-up',
                    ]
                ),
                'second_title' => json_encode([]),
                'section_content' => json_encode([]),
                'page_id' => 1,
                'section_order' => 2,
                'parent_id' => 6,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => '4-the-design',
                'title' => json_encode(
                    [
                        'en' => '4- The Design',
                        'ar' => '4- The Design',
                    ]
                ),
                'second_title' => json_encode([]),
                'section_content' => json_encode([]),
                'page_id' => 1,
                'section_order' => 3,
                'parent_id' => 6,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => '5-sign-an-agreement',
                'title' => json_encode(
                    [
                        'en' => '5- Sign an Agreement',
                        'ar' => '5- Sign an Agreement',
                    ]
                ),
                'second_title' => json_encode([]),
                'section_content' => json_encode([]),
                'page_id' => 1,
                'section_order' => 4,
                'parent_id' => 6,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => '6-production',
                'title' => json_encode(
                    [
                        'en' => '6- Production',
                        'ar' => '6- Production',
                    ]
                ),
                'second_title' => json_encode([]),
                'section_content' => json_encode([]),
                'page_id' => 1,
                'section_order' => 5,
                'parent_id' => 6,
                'status' => true,
                'url' => "",
            ],
            [
                'name' =>  '7-delivery',
                'title' => json_encode(
                    [
                        'en' => '7- Delivery',
                        'ar' => '7- Delivery',
                    ]
                ),
                'second_title' => json_encode([]),
                'section_content' => json_encode([]),
                'page_id' => 1,
                'section_order' => 6,
                'parent_id' => 6,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => '8-after-sales-service',
                'title' => json_encode(
                    [
                        'en' => '8- After-sales service',
                        'ar' => '8- After-sales service',
                    ]
                ),
                'second_title' => json_encode([]),
                'section_content' => json_encode([]),
                'page_id' => 1,
                'section_order' => 7,
                'parent_id' => 6,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function statisticsSection(): array
    {
        return [
            [ //15
                'name' => 'statistics',
                'title' => json_encode(
                    [
                        'en' => 'Statistics',
                        'ar' => 'Statistics',
                    ]
                ),
                'second_title' => json_encode([]),
                'section_content' => json_encode([]),
                'page_id' => 1,
                'section_order' => 3,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => 'work per week',
                'title' => json_encode(
                    [
                        'en' => 'Work Per Week',
                        'ar' => 'Work Per Week',
                    ]
                ),
                'second_title' => json_encode(['en' => '<i class="fal fa-rocket-launch"></i>']),
                'section_content' => json_encode(['en' => 0]),
                'page_id' => 1,
                'section_order' => 0,
                'parent_id' => 15,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => 'keywords-updated',
                'title' => json_encode(
                    [
                        'en' => 'Keywords Updated',
                        'ar' => 'Keywords Updated',
                    ]
                ),
                'second_title' => json_encode(['en' => '<i class="fal fa-comments-alt"></i>']),
                'section_content' => json_encode(['en' => 1]),
                'page_id' => 1,
                'section_order' => 0,
                'parent_id' => 15,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => 'google-search',
                'title' => json_encode(
                    [
                        'en' => 'Google Search',
                        'ar' => 'Google Search',
                    ]
                ),
                'second_title' => json_encode(['en' => '<i class="far fa-cogs"></i>']),
                'section_content' => json_encode(['en' => 2]),
                'page_id' => 1,
                'section_order' => 0,
                'parent_id' => 15,
                'status' => true,
                'url' => "",
            ],
            [
                'name' => 'indexed-google',
                'title' => json_encode(
                    [
                        'en' => 'Indexed Google',
                        'ar' => 'Indexed Google',
                    ]
                ),
                'second_title' => json_encode(['en' => '<i class="fal fa-envelope-open-text"></i>']),
                'section_content' => json_encode(['en' => 3]),
                'page_id' => 1,
                'section_order' => 0,
                'parent_id' => 15,
                'status' => true,
                'url' => "",
            ]
        ];
    }

    private function logoHeaderSection(): array
    {
        return [
            [ //20
                'name' => 'logo-header',
                'title' => 'url',
                'second_title' => json_encode([]),
                'section_content' => json_encode([]),
                'page_id' => 4,
                'section_order' => 4,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function logoFooterSection(): array
    {
        return [
            [ //21
                'name' => 'logo-footer',
                'title' => json_encode([
                    'en' => 'Our approach to itis unique around know work an we know doesn\'t work verified factors in play.',
                    'ar' => 'Our approach to itis unique around know work an we know doesn\'t work verified factors in play.'
                ]),
                'second_title' => json_encode([
                    'en' => 'Have Any Questions?',
                    'ar' => 'Have Any Questions?'
                ]),
                'section_content' => json_encode(['en' => '+966535550797']),
                'page_id' => 4,
                'section_order' => 5,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function newslatter(): array
    {
        return [
            [ //22
                'name' => 'newslatter',
                'title' => json_encode([
                    'en' => 'Newslatter',
                    'ar' => 'Newslatter'
                ]),
                'second_title' => json_encode([
                    'en' => 'Our approach to itis unique around know work an we know.',
                    'ar' => 'Our approach to itis unique around know work an we know.'
                ]),
                'section_content' => json_encode([]),
                'page_id' => 4,
                'section_order' => 6,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function copyright(): array
    {
        return [
            [ //23
                'name' => 'newslatter',
                'title' => json_encode([
                    'en' => 'Copyright Almas Arabic Pack 2023, All Right Reserved',
                    'ar' => 'Copyright Almas Arabic Pack 2023, All Right Reserved'
                ]),
                'second_title' => json_encode([]),
                'section_content' => json_encode([]),
                'page_id' => 4,
                'section_order' => 7,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function generalManagerSection(): array
    {
        return [
            [ //24
                'name' => 'general-managers-speech:',
                'title' => json_encode([
                    'en' => 'General Manager\'s Speech:',
                    'ar' => 'General Manager\'s Speech:'
                ]),
                'second_title' => json_encode([]),
                'section_content' => json_encode([
                    'en' => '<div class="about-5__content">
                                <div class="about-5__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s;">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem Ipsum has been the industry\'s standard dummy text ever since
                                        the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.
                                        It has survived not only five centuries, but also the leap into
                                        electronic typesetting,
                                        remaining essentially unchanged. </p>
                                </div>
                                <div class="about-5__content-list wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s" style="visibility: visible;animation-duration: 0.9s;animation-delay: 0.9s;animation-name: tpfadeUp;">
                                    <div class="about-3__content-list about-3__content-list-2">
                                        <ul>
                                            <li><i class="fal fa-check-square"></i><span>Business sagittis
                                                    aliquaenim minim veniam leo.</span></li>
                                            <li><i class="fal fa-check-square"></i><span>We give management
                                                    agency service. </span></li>
                                            <li><i class="far fa-angle-double-right"></i><span>Business
                                                    tailored it design, management &amp; services. </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>',
                    'ar' => '<div class="about-5__content">
                                <div class="about-5__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s;">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem Ipsum has been the industry\'s standard dummy text ever since
                                        the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.
                                        It has survived not only five centuries, but also the leap into
                                        electronic typesetting,
                                        remaining essentially unchanged. </p>
                                </div>
                                <div class="about-5__content-list wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s" style="visibility: visible;animation-duration: 0.9s;animation-delay: 0.9s;animation-name: tpfadeUp;">
                                    <div class="about-3__content-list about-3__content-list-2">
                                        <ul>
                                            <li><i class="fal fa-check-square"></i><span>Business sagittis
                                                    aliquaenim minim veniam leo.</span></li>
                                            <li><i class="fal fa-check-square"></i><span>We give management
                                                    agency service. </span></li>
                                            <li><i class="far fa-angle-double-right"></i><span>Business
                                                    tailored it design, management &amp; services. </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>'
                ]),
                'page_id' => 2,
                'section_order' => 0,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function cooSection(): array
    {
        return [
            [ //25
                'name' => 'coo',
                'title' => json_encode([
                    'en' => 'Word from the Chief Operating Officer:',
                    'ar' => 'Word from the Chief Operating Officer:'
                ]),
                'second_title' => json_encode([]),
                'section_content' => json_encode([
                    'en' => '<div class="about-details__text">
                                <p>Business tailored it design, management &amp; support services
                                    business agency elit, sed do eiusmod tempor. </p>
                            </div>
                            <div class="about-details__content-list">
                                <ul>
                                    <li><i class="fal fa-check-square"></i><span>Business sagittis aliquaenim
                                            minim veniam leo.</span></li>
                                    <li><i class="fal fa-check-square"></i><span>We give management agency
                                            service. </span></li>
                                    <li><i class="fal fa-check-square"></i><span>Business sagittis aliquaenim
                                            minim veniam leo.</span></li>
                                    <li><i class="fal fa-check-square"></i><span>Bacteria Markers sagittis
                                            aliquaenim minim venia.</span></li>
                                    <li><i class="fal fa-check-square"></i><span>Nam nec mi euismod minim veniam
                                            leo.</span></li>
                                    <li><i class="fal fa-check-square"></i><span>We sagittis aliquaenim minim
                                            veniam leo.</span></li>
                                </ul>
                            </div>',
                    'ar' => '<div class="about-details__text">
                                <p>Business tailored it design, management &amp; support services
                                    business agency elit, sed do eiusmod tempor. </p>
                            </div>
                            <div class="about-details__content-list">
                                <ul>
                                    <li><i class="fal fa-check-square"></i><span>Business sagittis aliquaenim
                                            minim veniam leo.</span></li>
                                    <li><i class="fal fa-check-square"></i><span>We give management agency
                                            service. </span></li>
                                    <li><i class="fal fa-check-square"></i><span>Business sagittis aliquaenim
                                            minim veniam leo.</span></li>
                                    <li><i class="fal fa-check-square"></i><span>Bacteria Markers sagittis
                                            aliquaenim minim venia.</span></li>
                                    <li><i class="fal fa-check-square"></i><span>Nam nec mi euismod minim veniam
                                            leo.</span></li>
                                    <li><i class="fal fa-check-square"></i><span>We sagittis aliquaenim minim
                                            veniam leo.</span></li>
                                </ul>
                            </div>'
                ]),
                'page_id' => 2,
                'section_order' => 1,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function getInContact(): array
    {
        return [
            [ //26
                'name' => 'get-in-contact',
                'title' => json_encode([
                    'en' => 'Get In Contact',
                    'ar' => 'Get In Contact'
                ]),
                'second_title' =>  json_encode([
                    'en' => 'Our approach to it is unique around know work an we know doesn\'t work verified factors in play.',
                    'ar' => 'Our approach to it is unique around know work an we know doesn\'t work verified factors in play.',
                ]),
                'section_content' => json_encode([]),
                'page_id' => 3,
                'section_order' => 0,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function callThisNow(): array
    {
        return [
            [ //27
                'name' => 'call-this-now',
                'title' => json_encode([
                    'en' => 'Call This Now',
                    'ar' => 'Call This Now'
                ]),
                'second_title' =>  json_encode(['en' => '+966535550797']),
                'section_content' => json_encode(['en' => '+966114549530']),
                'page_id' => 3,
                'section_order' => 1,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function yourMessage(): array
    {
        return [
            [ //28
                'name' => 'your-message',
                'title' => json_encode([
                    'en' => 'Your Message',
                    'ar' => 'Your Message'
                ]),
                'second_title' => json_encode(['en' => 'info@almaspack.com']),
                'section_content' => json_encode([]),
                'page_id' => 3,
                'section_order' => 2,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function yourLocation(): array
    {
        return [
            [ //29
                'name' => 'your-location',
                'title' => json_encode([
                    'en' => 'Your Location',
                    'ar' => 'Your Location'
                ]),
                'second_title' =>  json_encode(['en' => 'Saudi Arabia Riyadh']),
                'section_content' => json_encode([]),
                'page_id' => 3,
                'section_order' => 3,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }

    private function yourLocationMap(): array
    {
        return [
            [ //30
                'name' => 'your-location-map',
                'title' => json_encode([]),
                'second_title' =>  json_encode([]),
                'section_content' => json_encode(['en' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.9174111590273!2d46.784248899999994!3d24.7982814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2eff75f2aaf297%3A0x926a3a1a0f99783e!2z2LTYsdmD2Ycg2KfZhNmF2KfYsyDYp9mE2LnYsdio2YrZhyDZhNmE2KrYutmE2YrZgSAo2YXZgtixINin2YTYtNix2YPYqSApIEFMTUFTIFBBQ0s!5e0!3m2!1sar!2ssa!4v1685532114970!5m2!1sar!2ssa']),
                'page_id' => 3,
                'section_order' => 4,
                'parent_id' => null,
                'status' => true,
                'url' => "",
            ],
        ];
    }
}
