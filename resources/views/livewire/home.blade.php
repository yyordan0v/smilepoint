<flux:main container>
    <x-sections.home.hero :reviews="[
        [
            'text' => 'I am impressed by the professionalism of the team at the Smile Point clinic. The attitude towards patients is also very good. I highly recommend it!',
            'author' => 'Kalina Sirakova'
        ],
        [
            'text' => 'Excellent service! The staff was incredibly gentle and thorough. My dental cleaning was the best I have ever had. Will definitely be coming back!',
            'author' => 'Maria Rodriguez'
        ],
        [
            'text' => 'From the moment I walked in, I felt welcome and comfortable. The team explained everything clearly and the treatment was painless. Highly recommend!',
            'author' => 'David Thompson'
        ]
    ]"/>

    <x-sections.home.features/>

    <x-sections.home.consultation/>

    <x-sections.home.contact/>
</flux:main>
