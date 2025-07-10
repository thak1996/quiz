<x-main-layout pageTitle="'Countries & Capitals Quiz'">

    <div class="container" style="max-width: 1000px;">
        <x-question :country="$country" :currentQuestion="$currentQuestion" :totalQuestions="$totalQuestions" />
        <div class="row">
            @foreach ($answers as $answer)
            <x-answer :capital="$answer" />
            @endforeach
        </div>
    </div>
    <!-- cancel game -->
    <x-button_cancel />
</x-main-layout>