/// <reference types="multer" />
import { AdminService } from "./admin.service";
import { AdminDtoReg, AdminLogin, AdminModifyDto } from "./admin.dto";
export declare class TravelerControler {
    private readonly adminData;
    constructor(adminData: AdminService);
    regAdmin(adminRegInfo: AdminDtoReg): any;
    logAdmin(adminlogInfo: AdminLogin): any;
    showManagerInfoId(id: number): object;
    showTravelerInfoId(id: number): object;
    showTourGaid(id: number): Object;
    delManagerById(id: number): any;
    modifyAdminData(modifyadmin: AdminModifyDto): any;
    uploadFile(myfileobj: Express.Multer.File): object;
    getImages(name: any, res: any): void;
}
