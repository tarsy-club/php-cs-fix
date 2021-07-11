<?php

/**
 * Summary
 *
 * @ORM\Entity
 * @Vich\Uploadable
 * @ParamConverter("journal", class="App\Entity\Journal", options={"mapping": {"journal": "id"}})
 * @Route(
 *     path="/editor/{journal}/published/",
 *     path2: "/editor/{journal}/published/",
 *     name="article.list.editor.published"
 * )
 * @Foo({bar = "baz"})
 * @ORM\DiscriminatorMap({
 *     "author_instructions" = "App\Entity\File\AuthorInstructionsFile",
 *     "user_profile_image" = "App\Entity\File\UserProfileImage",
 *     "article" = "App\Entity\File\ArticleFile",
 *     "release" = "App\Entity\File\ReleaseFile",
 *     "article_photo" = "App\Entity\File\ArticlePhotoFile",
 *     "reason" = "App\Entity\File\ReasonFile",
 *     "journal" = "App\Entity\File\JournalFile",
 *     "article_history_record" = "App\Entity\File\ArticleHistoryRecordFile"
 * })
 */
class ArticleFile
{
    /**
     * @ORM\DiscriminatorMap({
     *     "author_instructions" = "App\Entity\File\AuthorInstructionsFile",
     *     "user_profile_image" = "App\Entity\File\UserProfileImage",
     *     "article" = "App\Entity\File\ArticleFile",
     *     "release" = "App\Entity\File\ReleaseFile",
     *     "article_photo" = "App\Entity\File\ArticlePhotoFile",
     *     "reason" = "App\Entity\File\ReasonFile",
     *     "journal" = "App\Entity\File\JournalFile",
     *     "article_history_record" = "App\Entity\File\ArticleHistoryRecordFile"
     * })
     * @Foo({bar = "baz"})
     * @Route(
     *     path="/editor/{journal}/published/",
     *     name="article.list.editor.published"
     * )
     * @ParamConverter("journal", class="App\Entity\Journal", options={"mapping": {"journal": "id"}})
     *
     * @var mixed
     *
     * @Vich\UploadableField(
     *     mapping="article",
     *     fileNameProperty="name",
     *     size="size",
     *     mimeType="mimeType",
     *     originalName="originalName"
     * )
     */
    protected $file;

    /**
     * @History\RecordableField
     */
    protected $hash;
}
