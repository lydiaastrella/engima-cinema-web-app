@Configuration
@EnableSwagger2
public class SwaggerConfig {

  @Bean
  public Docket api() {
    return new Docket(DocumentationType.SWAGGER_2)//
        .select()//
        .apis(RequestHandlerSelectors.any())//
        .paths(Predicates.not(PathSelectors.regex("/error")))//
        .build()//
        .apiInfo(metadata())//
        .useDefaultResponseMessages(false)//
        .securitySchemes(new ArrayList<>(Arrays.asList(new ApiKey("Bearer %token", "Authorization", "Header"))))//
        .tags(new Tag("auth", "Operasi Untuk Login"))//
             .tags(new Tag("cart", "Operasi Untuk Register"))//
            .tags(new Tag("order", "Operasi Untuk Home"))//
            .tags(new Tag("category", "Operasi Untuk Search Result"))//
            .tags(new Tag("product", "Operasi Untuk Film Detail"))//
            .tags(new Tag("profile", "Operasi Untuk Buy Ticket"))//
            .tags(new Tag("review", "Operasi Untuk menambahkan Transaction History"))//
            .tags(new Tag("review", "Operasi Untuk menambahkan User Review"))//
        .genericModelSubstitutes(Optional.class);

  }

  private ApiInfo metadata() {
    return new ApiInfoBuilder()//
        .title("Engima")//
        .description("Buy Ticket Online")
        .version("1.0.0")//
        .license("MIT License").licenseUrl("http://opensource.org/licenses/MIT")//
        .contact(new Contact(null, null, null))//
        .build();
  }

}